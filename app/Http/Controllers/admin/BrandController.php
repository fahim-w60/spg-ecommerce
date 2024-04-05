<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\BrandStoreRequest;
use App\Models\User;
use App\Models\Ec_brand;
use App\Models\Ec_brand_translation;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:brand.list', ['only' => ['index', 'AllBrandListForAdmin']]);
        $this->middleware('permission:brand.add', ['only' => ['StoreBrand']]);
        $this->middleware('permission:brand.edit', ['only' => ['EditBrand']]);
        $this->middleware('permission:brand.edit', ['only' => ['updateBrand']]);
        $this->middleware('permission:brand.delete', ['only' => ['DeleteBrand']]);
    }


    public function index()
    {
        return view('admin.brand.index');
    }
    public function StoreBrand(BrandStoreRequest $request)
    {
        $validateData = $request->validated();
        $data = new Ec_brand();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->website = $request->website;
        //$data->logo = $request->file('logo');
        $data->status = 1;
        $data->order = 1;
        if($request->featured== 'yes') {
            $data->is_featured = 1;
        }
        else{
            $data->is_featured = 0;
        }
        if($request->file('logo'))
        {
            $logo = $request->file('logo');
            $photoName = date("Y-m-d").'.'.rand().'.'.time().'.'.$logo->getClientOriginalExtension();
            $directory = 'upload/admin/brand/';
            $logo->move($directory,$photoName);
            $data->logo = $directory.$photoName;
            
        }
        $data->save();
        $id = $data->id;
        $data = new Ec_brand_translation();
        $data->lang_code = 'bn';
        $data->ec_brands_id = $id;
        $data->name = $request->translation_name;
        $data->description = $request->translation_description;
        $data->save();
        $notification = array(
            'message' => 'Brand Stored Successfully',
            'alert-type' => 'success',
        );

        return back()->with($notification); 
    }
    
    public function AllBrandListForAdmin()
    {
        $brands = Ec_brand::with('translations')->paginate(2);
        //dd($brands);
        return view('admin.brand.brand_list',compact('brands'));
    }

    public function EditBrand($id)
    {
        $brand = Ec_brand::with('translations')->findOrFail($id);
        //dd($brand);
        return view('admin.brand.edit',compact('brand'));
    }

    public function updateBrand(BrandStoreRequest $request, $id)
    {
        $brand = Ec_brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->website = $request->website;
        $brand->is_featured = $request->featured == 'yes' ? 1 : 0;
    
        if ($request->hasFile('logo')) {
            if ($brand->logo) {
                unlink(public_path($brand->logo));
            }
            $logo = $request->file('logo');
            $photoName = date("Y-m-d") . '.' . rand() . '.' . time() . '.' . $logo->getClientOriginalExtension();
            $directory = 'upload/admin/brand/';
            $logo->move($directory, $photoName);
            $brand->logo = $directory . $photoName;
        }
        $brand->save();
        $brandTranslation = Ec_brand_translation::where('ec_brands_id', $id)->where('lang_code', 'bn')->first();
        if ($brandTranslation) {
            $brandTranslation->name = $request->translation_name;
            $brandTranslation->description = $request->translation_description;
            $brandTranslation->save();
        }
        $notification = array(
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    public function DeleteBrand($id)
    {
        $brand = Ec_brand::findOrFail($id);
        $brand->status = 0;
        $brand->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }
    
}
