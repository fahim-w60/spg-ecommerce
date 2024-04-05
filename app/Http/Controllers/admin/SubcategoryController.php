<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ec_product_categories;
use App\Http\Requests\admin\SubcategoryStoreRequest;
use App\Models\Ec_product_categories_translation;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $category,$subCategory,$subCategoryPaginate;

    public function __construct()
    {
       

        $this->middleware('permission:subcategory.list|subcategory.add|subcategory.edit|subcategory.delete', ['only' => ['index','store']]);
        $this->middleware('permission:subcategory.add', ['only' => ['create','store']]);
        $this->middleware('permission:subcategory.edit', ['only' => ['edit','update']]);
        $this->middleware('permission:subcategory.delete', ['only' => ['destroy']]);

        $this->category = Ec_product_categories::where('status', 1)->get();
        $this->subCategory = Ec_product_categories::where('status', 1)->whereNotNull('parent_id')->get();
        $this->subCategoryPaginate = Ec_product_categories::where('status', 1)->whereNotNull('parent_id')->paginate(3);
    }

    public function index()
    {
        $categories = $this->category;
        return view('admin.subcategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->category;
        $subCategories = $this->subCategoryPaginate;
        return view('admin.subcategory.subCategoryList',compact('categories','subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubcategoryStoreRequest $request)
    {
        $levelOfCategory = Ec_product_categories::where('id',$request->categoryId)->where('status',1)->first();
        $data = new Ec_product_categories();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->parent_id = $request->categoryId;
        $data->status = 1;
        $data->order = 1;
        $data->enableSubcat = 1;
        if($levelOfCategory->level)
        {
            $data->level = $levelOfCategory->level + 1;
        }
        
        if($request->featured== 'yes') {
            $data->is_featured = 1;
        }

        else{
            $data->is_featured = 0;
        }
        if($request->file('image'))
        {
            $image = $request->file('image');
            $photoName = date("Y-m-d").'.'.rand().'.'.time().'.'.$image->getClientOriginalExtension();
            $directory = 'upload/admin/subcategory/';
            $image->move($directory,$photoName);
            $data->image = $directory.$photoName;
            
        }
        $data->save();
        $id = $data->id;
        $data = new Ec_product_categories_translation();
        $data->lang_code = 'bn';
        $data->categories_id  = $id;
        $data->name = $request->translation_name;
        $data->description = $request->translation_description;
        $data->save();
        $notification = array(
            'message' => 'Subcategory Stored Successfully',
            'alert-type' => 'success',
        );

        return back()->with($notification);

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
        $subcategory = Ec_product_categories::with('translations')->find($id);
        //dd($subcategory);

        $categories = $this->category;
        return view('admin.subcategory.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubcategoryStoreRequest $request, string $id)
    {
    
        $data = Ec_product_categories::findOrFail($id);
        $levelOfCategory = Ec_product_categories::where('id',$request->categoryId)->where('status',1)->first();
        $data->name = $request->name;
        $data->description = $request->description;
        if($levelOfCategory->parent_id)
        {
            $data->parent_id = $levelOfCategory->parent_id;
        }
        else{
            $data->parent_id = 'NULL';
        }
        
        $data->status = 1;
        $data->order = 1;
        $data->enableSubcat = 1;
        if($levelOfCategory->level)
        {
            $data->level = $levelOfCategory->level + 1;
        }
        
        if($request->featured== 'yes') {
            $data->is_featured = 1;
        }

        else{
            $data->is_featured = 0;
        }
        if ($request->file('image')) {
            $currentImagePath = $data->image;
    
            if (file_exists($currentImagePath)) {
                unlink($currentImagePath);
            }
        
            $image = $request->file('image');
            $photoName = date("Y-m-d") . '.' . rand() . '.' . time() . '.' . $image->getClientOriginalExtension();
            $directory = 'upload/admin/subcategory/';
            $image->move($directory, $photoName);
            $data->image = $directory . $photoName;
        }
        
        $data->save();
        $id = $data->id;
        $data = Ec_product_categories_translation::where('categories_id', $id)->where('lang_code', 'bn')->firstOrFail();
        $data->lang_code = 'bn';
        $data->categories_id  = $id;
        $data->name = $request->translation_name;
        $data->description = $request->translation_description;
        $data->save();
        $notification = array(
            'message' => 'Subcategory Update Successfully',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        $category = Ec_product_categories::findOrFail($id);
        $category->status = 0;
        $category->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }
}
