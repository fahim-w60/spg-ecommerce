<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\AttributeStoreRequest;
use App\Http\Requests\admin\AttributeUpdateRequest;
use App\Models\Ec_product_attribute;
use App\Models\Ec_product_attribute_translation;
use Illuminate\Support\Str;
use App\Models\Ec_product_attribute_set;

class ProductAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */

    public $attribute,$attributePaginate,$attributeSet;

    public function __construct()
    {
    
            $this->middleware('permission:attribute.list|attribute.add|attribute.edit|attribute.delete', ['only' => ['index','store']]);
            $this->middleware('permission:attribute.add', ['only' => ['create','store']]);
            $this->middleware('permission:attribute.edit', ['only' => ['edit','update']]);
            $this->middleware('permission:attribute.delete', ['only' => ['destroy']]);

        $this->attributeSets = Ec_product_attribute_set::where('status', 1)->get();
        $this->attribute = Ec_product_attribute::where('status', 1)->get();
        $this->attributePaginate = Ec_product_attribute::where('status', 1)->paginate(2);
    }

    public function index()
    {
        $attributeSets = $this->attributeSets;
        return view('admin.attribute.index',compact('attributeSets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas = $this->attributePaginate;
        return view('admin.attribute.attributeList',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AttributeStoreRequest $request)
    {
        $data = new Ec_product_attribute();
        $data->attribute_set_id = $request->attribute_set_id;
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->color = $request->color;
        if($request->file('image'))
        {
            $image = $request->file('image');
            $photoName = date("Y-m-d").'.'.rand().'.'.time().'.'.$image->getClientOriginalExtension();
            $directory = 'upload/admin/attribute/';
            $image->move($directory,$photoName);
            $data->image = $directory.$photoName;
        }
        $data->is_default = $request->default ? 1:0;
        $data->status = 1;
        $data->order = 1;
        $data->save();
        $id = $data->id;
       

        $data = new Ec_product_attribute_translation();
        $data->lang_code = 'bn';
        $data->attribute_id = $id;
        $data->title = $request->translation_name;

        $data->save();
        $notification = array(
            'message' => 'Attribute Stored Successfully',
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
       $attributeSets =  $this->attributeSets;
       $attribute = Ec_product_attribute::with('translations')->findOrFail($id);
       //dd($attributeSets);
       return view('admin.attribute.edit',compact('attributeSets','attribute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AttributeUpdateRequest $request, string $id)
    {
        $attribute = Ec_product_attribute::findOrFail($id);
        $attribute->attribute_set_id = $request->attribute_set_id;
        $attribute->title = $request->title;
        $attribute->slug = Str::slug($request->title);
        $attribute->color = $request->color;
        
        
        if ($request->hasFile('image')) {
            if (file_exists($attribute->image)) {
                unlink($attribute->image);
            }
            $image = $request->file('image');
            $photoName = date("Y-m-d") . '.' . rand() . '.' . time() . '.' . $image->getClientOriginalExtension();
            $directory = 'upload/admin/attribute/';
            $image->move($directory, $photoName);
            $attribute->image = $directory . $photoName;
        }
        $attribute->is_default = $request->has('default') ? 1 : 0;
        
        $attribute->save();
        
        $translation = Ec_product_attribute_translation::where('attribute_id', $id)->where('lang_code', 'bn')->firstOrFail();
        $translation->title = $request->translation_name;
        $translation->save();
        
        $notification = array(
            'message' => 'Attribute updated successfully',
            'alert-type' => 'success',
        );
        
        return back()->with($notification);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attribute = Ec_product_attribute::findOrFail($id);
        $attribute->status = 0;
        $attribute->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }
    public function getAttributes($id)
    {
        $attributes = Ec_product_attribute::where('attribute_set_id',$id)->get();
        $data = [];
        foreach ($attributes as $attribute) {
            $data[$attribute->id] = $attribute->title;
        }
        return response()->json($data);
    }
}
