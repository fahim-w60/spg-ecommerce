<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ec_product_categories;
use App\Models\Ec_brand;
use App\Models\Ec_product_attribute_set;
use App\Models\Ec_product_attribute;
use App\Models\Ec_product;
use App\Models\Ec_product_translation;
use App\Models\Ec_product_with_multiImages;
use App\Models\Ec_product_video;
use App\Models\Ec_multiImages;
use App\Models\Ec_product_with_attribute_set;
use App\Models\Ec_product_category_product;
use App\Models\Ec_video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\admin\ProductStoreRequest;
use App\Http\Requests\admin\ProductUpdateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $categories,$brands,$attributeSet,$productPaginates,$productWithCategory;

    public function __construct()
    {

        $this->middleware('permission:product.list|product.add|product.edit|product.delete', ['only' => ['index','store']]);
         $this->middleware('permission:product.add', ['only' => ['create','store']]);
         $this->middleware('permission:product.edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product.delete', ['only' => ['destroy']]);

        $this->categories = Ec_product_categories::where('status',1)->with('translations')->get();
        $this->brands = Ec_brand::where('status',1)->with('translations')->get();
        $this->attributeSets = Ec_product_attribute_set::where('status',1)->with('translations')->get();
       // $this->productPaginates = 
       // $this->productWithCategory = Ec_product_category_product::get();
    }


    public function index()
    {
        $categories = $this->categories;
        $brands = $this->brands;
        $attributeSets = $this->attributeSets;
        //dd($brands);
        $commons['main_menu'] = 'product';
        return view('admin.product.index',compact('categories','brands','attributeSets','commons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $commons['main_menu'] = 'product';
        $productPaginates =Ec_product::with(['translations','categories','brands'])->where('status',1)->paginate(2);
        //return $productPaginates;
        return view('admin.product.product_list',compact('productPaginates','commons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {   
        DB::beginTransaction();
        try {

        //dd($request);
        $auth_user = Auth::user();
        $data = new Ec_product();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->content = $request->content;
        $data->status = 1;
        $data->sku = $request->sku;
        $data->order = 1;
        $data->quantity = $request->quantity ? $request->quantity : null;
        $data->allow_checkout_when_out_of_stock = $request->stock ? $request->stock : 0;
        $data->with_storehouse_management = $request->storehouse ? $request->storehouse : 0;
        $data->is_featured = $request->featured ? $request->featured: 0;
        $data->brand_id = $request->brand_id ? $request->brand_id : null;
        $data->is_variation = 1;
        $data->sale_type = $request->sale_type ? $request->sale_type : null;
        // $data->price = $request->price ? $request->price : null;
        // $data->sale_price = $request->sale_price ? $request->sale_price: '';
        $data->start_date = $request->start_date ? date("Y-m-d", strtotime($request->start_date)) : null;
        $data->end_date = $request->end_date ? date("Y-m-d", strtotime($request->end_date)) : null;
        $data->length = $request->length ? $request->length : null;
        $data->wide = $request->wide ? $request->wide : null;
        $data->height = $request->height ?  $request->height: null;
        $data->weight = $request->weight ? $request->weight : null;
        $data->tax_id = $request->tax_id ? $request->tax_id: null;
        $data->views = 0;
        $data->stock_status = $request->stock_status ? $request->stock_status : null;
        $data->created_by_id = $auth_user->id;
        $data->created_by_type = $auth_user->role;
        $data->store_id = $request->store_id ? $request->store_id : null;
        $data->emi_enable = 1;
        if($request->file('image'))
        {
            $image = $request->file('image');
            $photoName = date("Y-m-d").'.'.rand().'.'.time().'.'.$image->getClientOriginalExtension();
            $directory = 'upload/admin/product/';
            $image->move($directory,$photoName);
            $data->image = $directory.$photoName;
        }

        $data->save();
        $product_id = $data->id;


        $data = new Ec_product_translation();
        $data->lang_code = 'bn';
        $data->ec_products_id = $product_id;
        $data->translation_name = $request->translation_name;
        $data->content = $request->translation_content ? $request->translation_content : '';
        $data->save();

        if($request->file('multi_img')) {
            $images = $request->file('multi_img');
            foreach($images as $image) {
                $data = new Ec_multiImages();
                $product_image = new Ec_product_with_multiImages();
                $photoName = date("Y-m-d").'.'.rand().'.'.time().'.'.$image->getClientOriginalExtension();
                $directory = 'upload/admin/product/';
                $image->move($directory, $photoName);
                $data->image = $directory . $photoName;
                $data->product_id = $product_id;
                $data->save(); 
        
               
                $multiImageId = $data->id;
        
               
                $product_image->product_id = $product_id;
                $product_image->multiImage_id = $multiImageId;
                $product_image->save(); 
            }
        }
        

        // $data = new Ec_product_with_attribute_set();
        // $data->attribute_set_id = $request->attribute_set_id;
        // $data->product_id = $product_id;
        // $data->order = 1;
        // $data->save();

        // $data = new Ec_product_attribute_wise_stock();


        $data = new Ec_product_category_product();
        $data->category_id = $request->categoryId;
        $data->product_id = $product_id;
        $data->save();

        if ($request->has('video_type') && $request->has('video_link')) {
            $videoTypes = $request->input('video_type');
            $videoLinks = $request->input('video_link');
            $count = count($videoTypes);
            for ($i = 0; $i < $count; $i++) {
                $data = new Ec_video();
                $product_video = new Ec_product_video();
                $data->video_type = $videoTypes[$i];
                $data->video_link = $videoLinks[$i];
                $data->product_id = $product_id;
                $data->save();
                $product_video->product_id	= $product_id;
                $product_video->video_id = $data->id;
                $product_video->save();
            }
        }

        DB::commit();
        $notification = array(
            'message' => 'Product Stored Successfully',
            'alert-type' => 'success',
        );

        return back()->with($notification);
    }

    catch(\Exception $e) {
       DB::rollback();

        $notification = array(
            'message' => 'Failed to store product. Please try again.',
            'alert-type' => 'error',
        );

        return back()->with($notification);
    }


}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commons['main_menu'] = 'product';
        $product = Ec_product::where('status', 1)->with(['categories','translations','multi_images','videos','attribute_set','inventory_stocks'])->findOrFail($id);
        //return $product;
        $categories = Ec_product_categories::where('status',1)->with('translations')->get();
        $brands = Ec_brand::where('status',1)->with('translations')->get();
        $attributeSets = Ec_product_attribute_set::where('status',1)->with('translations')->get();
        $attributes = Ec_product_attribute::where('status',1)->with('translations')->get();
        return view('admin.product.edit',compact('product','categories','brands','attributeSets','attributes','commons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, string $id)
    {

        DB::beginTransaction();
        try {

        //dd($request->all());

        $auth_user = Auth::user();
        $data = Ec_product::findOrFail($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->content = $request->content;
        $data->status = 1;
        $data->sku = $request->sku;
        $data->order = 1;
        $data->quantity = $request->quantity ? $request->quantity : null;
        $data->allow_checkout_when_out_of_stock = $request->stock ? $request->stock : 0;
        $data->with_storehouse_management = $request->storehouse ? $request->storehouse : 0;
        $data->is_featured = $request->featured ? $request->featured: 0;
        $data->brand_id = $request->brand_id ? $request->brand_id : null;
        $data->is_variation = 1;
        $data->sale_type = $request->sale_type ? $request->sale_type : null;
        $data->start_date = $request->start_date ? date("Y-m-d", strtotime($request->start_date)) : null;
        $data->end_date = $request->end_date ? date("Y-m-d", strtotime($request->end_date)) : null;
        $data->length = $request->length ? $request->length : null;
        $data->wide = $request->wide ? $request->wide : null;
        $data->height = $request->height ?  $request->height: null;
        $data->weight = $request->weight ? $request->weight : null;
        $data->tax_id = $request->tax_id ? $request->tax_id: null;
        $data->views = 0;
        $data->stock_status = $request->stock_status ? $request->stock_status : null;
        $data->created_by_id = $auth_user->id;
        $data->created_by_type = $auth_user->role;
        $data->store_id = $request->store_id ? $request->store_id : null;
        $data->emi_enable = 1;
        if($request->file('image'))
        {
            if($data->image)
            {
                unlink($data->image);
            }
            $image = $request->file('image');
            $photoName = date("Y-m-d").'.'.rand().'.'.time().'.'.$image->getClientOriginalExtension();
            $directory = 'upload/admin/product/';
            $image->move($directory,$photoName);
            $data->image = $directory.$photoName;
        }

        $data->save();
        $product_id = $data->id;

        $data = Ec_product_translation::where('ec_products_id', $id)->first();
        $data->lang_code = 'bn';
        $data->ec_products_id = $product_id;
        $data->translation_name = $request->translation_name;
        $data->content = $request->translation_content ? $request->translation_content : '';
        $data->save();

        $data = Ec_product_category_product::where('product_id',$id)->first();
        $data->category_id = $request->categoryId;
        $data->product_id = $product_id;
        $data->save();

        //Fetch All Previous Image Id
        $image_ids = Ec_multiImages::where('product_id',$request->id)->pluck('id')->toArray();
        //return $image_ids;
        $only_image_ids = [];
        foreach($image_ids as $val){
            $only_image_ids[]=$val;
        }
        //return $only_image_ids;
        //Only existing image update
        // $ec_multi_images_ids = $request->ec_multi_images_id ?? [];
        // dd('$ec_multi_images_ids');
        //$test = [];
        if(sizeof($request->ec_multi_images_id) > 0){
            foreach($request->ec_multi_images_id as $val){
                $input_name = "multi_img__".$val;
                if($request->has($input_name)){
                   $data =  Ec_multiImages::findOrFail($val);
                   
                   if($data->image)
                   {
                        unlink($data->image);
                   }   
                   $image = $request->file($input_name);
                   $photoName = date("Y-m-d").'.'.rand().'.'.time().'.'.$image->getClientOriginalExtension();
                   $directory = 'upload/admin/product/';
                   $image->move($directory,$photoName);
                   $data->image = $directory.$photoName;
                   $data->save();
                }
            }
        }

        $delete_ids = array_diff($only_image_ids,$request->ec_multi_images_id);


        foreach($delete_ids as $delete_id)
        {
            $data =  Ec_multiImages::findOrFail($delete_id);
            $product_image = Ec_product_with_multiImages::where('multiImage_id', $delete_id)->firstOrFail();
            if($data->image)
            {
                unlink($data->image);
                $data->delete();
            }
            if($product_image)
            {
                $product_image->delete();
            }
        }

        //New Added Image Upload
        if($request->file('multi_img')) {
            $images = $request->file('multi_img');
            foreach($images as $image) {
                $data = new Ec_multiImages();
                $product_image = new Ec_product_with_multiImages();
                $photoName = date("Y-m-d").'.'.rand().'.'.time().'.'.$image->getClientOriginalExtension();
                $directory = 'upload/admin/product/';
                $image->move($directory, $photoName);
                $data->image = $directory . $photoName;
                $data->product_id = $id;
                $data->save(); 
        
               
                $multiImageId = $data->id;
        
               
                $product_image->product_id = $id;
                $product_image->multiImage_id = $multiImageId;
                $product_image->save(); 
            }
        }
        DB::commit();
        $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success',
        );

        return back()->with($notification);
    }
        catch(\Exception $e) {
            DB::rollback();
     
             $notification = array(
                 'message' => 'Failed to Update product. Please try again.',
                 'alert-type' => 'error',
             );
     
             return back()->with($notification);
         }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $product = Ec_product::findOrFail($id);
        $product->status = 0;
        $product->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }
}
