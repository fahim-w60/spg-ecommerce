<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\CategoryStoreRequest;
use App\Models\Ec_product_categories;
use App\Models\Ec_product_categories_translation;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:category.list', ['only' => ['index', 'AllCategoryListForAdmin']]);
        $this->middleware('permission:category.add', ['only' => ['StoreCategory']]);
        $this->middleware('permission:category.edit', ['only' => ['EditCategory']]);
        $this->middleware('permission:category.edit', ['only' => ['UpdateCategory']]);
        $this->middleware('permission:category.delete', ['only' => ['DeleteCategory']]);
    }


    public function index()
    {
        return view('admin.category.index');
    }

    public function StoreCategory(CategoryStoreRequest $request)
    {
        $validateData = $request->validated();
        $data = new Ec_product_categories();
        $data->name = $request->name;
        $data->description = $request->description;
        //$data->logo = $request->file('image');
        $data->status = 1;
        $data->order = 1;
        $data->level = 1;
        $data->enableSubcat = 0;
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
            $directory = 'upload/admin/category/';
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
            'message' => 'Category Stored Successfully',
            'alert-type' => 'success',
        );

        return back()->with($notification);
    }
    public function AllCategoryListForAdmin()
    {
        $categories = Ec_product_categories::where('parent_id', null)->where('status', 1)->with('translations')->paginate(2);
        //dd($categories);
        return view('admin.category.category_list',compact('categories'));
    }
    public function EditCategory($id)
    {
        //dd($id);
        $category = Ec_product_categories::with('translations')->find($id);
        //dd($subcategory);

        
        return view('admin.category.edit',compact('category'));
    }
    public function UpdateCategory(CategoryStoreRequest $request, $id)
    {
        $category = Ec_product_categories::findOrFail($id);
    
       
        $category->name = $request->name;
        $category->description = $request->description;
    
        if ($request->file('image')) {
            if ($category->image) {
                unlink(public_path($category->image));
            }
            $image = $request->file('image');
            $photoName = date("Y-m-d") . '.' . rand() . '.' . time() . '.' . $image->getClientOriginalExtension();
            $directory = 'upload/admin/category/';
            $image->move($directory, $photoName);
            $category->image = $directory . $photoName;
        }
        $category->is_featured = ($request->featured == 'yes') ? 1 : 0;
        $category->save();
    
        $translation = Ec_product_categories_translation::firstOrNew(['categories_id' => $id, 'lang_code' => 'bn']);
        $translation->name = $request->translation_name;
        $translation->description = $request->translation_description;
    
        $translation->save();

        $notification = [
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success',
        ];
    
        return back()->with($notification);
    }
    
    public function DeleteCategory($id)
    {
    
        $category = Ec_product_categories::findOrFail($id);
        $category->status = 0;
        $category->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }
}
