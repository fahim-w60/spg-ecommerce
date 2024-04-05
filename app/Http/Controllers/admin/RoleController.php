<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\admin\StoreRoleInPermission;
use App\Http\Requests\admin\UpdateRoleInPermission;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $roles = Role::where('status',1)->paginate(3);
        return view('admin.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {

            $role = Role::create([
                'name' => $request->name,
                'status' => 1,
            ]);

            $notification = [
                'message' => 'Roles created successfully',
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
        $data = Role::findOrFail($id);
        return view('admin.roles.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        try {

            $role = Role::findOrFail($id);
            $role->update([
                'name' => $request->name,
            ]);

            $notification = [
                'message' => 'Roles updated successfully',
                'alert-type' => 'success',
            ];

        } catch (\Exception $e) {
           
            $notification = [
                'message' => 'Error: this role already exist' ,
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
        $role = Role::findOrFail($id);
        $role->status = 0;
        $role->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }

    public function addRoleInPermission()
    {
        $roles = Role::get();
        $permissions = Permission::get();
        $group_permissions = Permission::select('group_name')->distinct()->get();

        $group_array=[];
        foreach($permissions as $key=>$val){
            $group_array[$val->group_name][]=$val;
        }
        //return $group_array;
        //dd($permissions);
        return view('admin.roles.show',compact('permissions','roles','group_permissions','group_array'));
    }

    public function storeRoleInPermission(StoreRoleInPermission $request)
    {
        $data = array();
        $permissions = $request->permission;
        foreach($permissions as $key => $value)
        {
            $data['role_id'] = $request->role;
            $data['permission_id'] = $value;
            DB::table('role_has_permissions')->insert($data);
        }

        $notification = [
            'message' => 'Permission added successfully' ,
            'alert-type' => 'success',
        ];

        return back()->with($notification);
    }

    public function editRoleInPermission($id)
    {
        //dd('hello');
        //dd($id);
        $roles = Role::get();
        $permissions = Permission::get();
        $group_permissions = Permission::select('group_name')->distinct()->get();

        $group_array=[];
        foreach($permissions as $key=>$val){
            $group_array[$val->group_name][]=$val;
        }
        $role = Role::findOrFail($id) ;
        $roles_permission = DB::table('role_has_permissions')->where('role_id', $id)->pluck('permission_id')->toArray();
        //return $roles_permission;
        return view('admin.roles.edit_role_in_permission',compact('roles','permissions','group_array','role','roles_permission'));

    }
    public function updateRoleInPermission(UpdateRoleInPermission $request)
    {
        $roleId = $request->role_id;
        $permissions = $request->permission;


        DB::beginTransaction();
        try {
            
            DB::table('role_has_permissions')->where('role_id', '=', $roleId)->delete();
            
            $data = array();
            foreach($permissions as $value)
            {
                $data['role_id'] = $roleId; 
                $data['permission_id'] = $value;
                DB::table('role_has_permissions')->insert($data);
            }

            
            app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

            
            DB::commit();

            $notification = [
                'message' => 'Permission updated successfully',
                'alert-type' => 'success',
            ];
        } catch (\Exception $e) {
            
            DB::rollback();

            
            $notification = [
                'message' => 'An error occurred while updating permissions.',
                'alert-type' => 'error',
            ];
        }

        return back()->with($notification);
    }

}
