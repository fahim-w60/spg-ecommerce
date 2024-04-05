<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\adminUserStoreRequest;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = User::where('role','admin')->where('status','active')->paginate(3);
        return view('admin.adminUser.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::get();
        return view('admin.adminUser.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(adminUserStoreRequest $request)
    {
        // dd($request);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'phone' => $request->phone, 
            'role' => 'admin',
            'status' => 'active',
        ]);
     
        if($request->has('role_name')) {
            $roleIdentifier = $request->role_name;
    
            $role = \Spatie\Permission\Models\Role::find($roleIdentifier) ?? \Spatie\Permission\Models\Role::whereName($roleIdentifier)->first();
    
            if ($role) {
                $user->assignRole($role);
            } else {
                $notification = array(
                    'message' => 'Role not found',
                    'alert-type' => 'error',
                );
        
                return back()->with($notification);            
            }
        }
    
       

        $notification = array(
            'message' => 'Admin user Stored Successfully',
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->status = 'inactive';
        $user->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }
}
