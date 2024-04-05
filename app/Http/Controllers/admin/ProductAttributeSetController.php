<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\AttributeSetStoreRequest;
use App\Models\Ec_product_attribute_set;
use App\Models\Ec_product_attribute_set_translation;
use Illuminate\Support\Str;

class ProductAttributeSetController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $attributeSet,$attributeSetPaginate;

    public function __construct()
    {
            $this->middleware('permission:attribute_set.list|attribute_set.add|attribute_set.edit|attribute_set.delete', ['only' => ['index','store']]);
            $this->middleware('permission:attribute_set.add', ['only' => ['create','store']]);
            $this->middleware('permission:attribute_set.edit', ['only' => ['edit','update']]);
            $this->middleware('permission:attribute_set.delete', ['only' => ['destroy']]);

        $this->attributeSet = Ec_product_attribute_set::where('status', 1)->get();
        $this->attributeSetPaginate = Ec_product_attribute_set::where('status', 1)->paginate(2);
    }
    
    public function index()
    {
        return view('admin.attributeSet.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas = $this->attributeSetPaginate;
        return view('admin.attributeSet.attributeSetList',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AttributeSetStoreRequest $request)
    {
        $data = new Ec_product_attribute_set();
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->display_layout = $request->display_layout;
        $data->is_searchable = ($request->searchable == 1) ? 1 : 0;
        $data->is_comparable = ($request->comparable == 1) ? 1 : 0;
        $data->is_use_in_product_listing = ($request->useInProductListing == 1) ? 1 : 0;
        $data->use_image_from_product_variation = ($request->useImageFromProductVariation == 1) ? 1 : 0;
        $data->status = 1;
        $data->order = 1;
        
        $data->save();
        $id = $data->id;
        $data = new Ec_product_attribute_set_translation();
        $data->lang_code = 'bn';
        $data->attribute_set_id = $id;
        $data->title = $request->translation_name;

        $data->save();
        $notification = [
            'message' => 'Attribute Set Store Successfully',
            'alert-type' => 'success',
        ];

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
        $attributeSet = Ec_product_attribute_set::with('translations')->findOrFail($id);
        return view('admin.attributeSet.edit',compact('attributeSet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AttributeSetStoreRequest $request, $id)
    {
        //dd($request);
        $data = Ec_product_attribute_set::findOrFail($id);
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->display_layout = $request->display_layout;
        $data->is_searchable = ($request->searchable == 1) ? 1 : 0;
        $data->is_comparable = ($request->comparable == 1) ? 1 : 0;
        $data->is_use_in_product_listing = ($request->useInProductListing == 1) ? 1 : 0;
        $data->use_image_from_product_variation = ($request->useImageFromProductVariation == 1) ? 1 : 0;
        
        $data->status = 1;
        $data->order = 1;
        $data->save();
        
        
        $translation = Ec_product_attribute_set_translation::where('attribute_set_id', $id)->where('lang_code', 'bn')->first();
        if ($translation) {
            $translation->title = $request->translation_name;
            $translation->save();
        }
        $notification = [
            'message' => 'Attribute Set Updated Successfully',
            'alert-type' => 'success',
        ];
    
        return back()->with($notification);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attributeSet = Ec_product_attribute_set::findOrFail($id);
        $attributeSet->status = 0;
        $attributeSet->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }
}
