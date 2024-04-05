<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\PermissionStoreRequest;
// use Spatie\Permission\Models\Role;
use App\Http\Requests\admin\PermissionUpdateRequest;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::where('status',1)->paginate(3);
        
        return view('admin.permission.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionStoreRequest $request)
    {
        try {

            $permission = Permission::create([
                'name' => $request->name,
                'group_name' => $request->group_name,
                'status' => 1,
            ]);

            
            $notification = [
                'message' => 'Permission created successfully',
                'alert-type' => 'success',
            ];

        } catch (\Exception $e) {
           
            $notification = [
                'message' => 'Error: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];
        }
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
        $data = Permission::findOrFail($id);
        
        return view('admin.permission.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionUpdateRequest $request, $id)
    {
        try {
            
            $permission = Permission::findOrFail($id);
    
           
            $permission->update([
                'name' => $request->name,
                'group_name' => $request->group_name,
            ]);
    
            
            $notification = [
                'message' => 'Permission updated successfully',
                'alert-type' => 'success',
            ];
    
        } catch (\Exception $e) {
            
            $notification = [
                'message' => 'Error: this permission name already exist',
                'alert-type' => 'error',
            ];
        }
        return back()->with($notification);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permission::findOrFail($id);
        //dd($permission);
        $permission->status = 0;
        $permission->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }
}
