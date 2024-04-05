<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AdminStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\admin\AdminPasswordStore;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    public function AdminProfile()
    {
        $id = Auth::User()->id;
        $user = User::findOrFail($id);
        //dd($user->photo);
        return view('admin.profile.index',compact('user'));
    }
    public function StoreAdminProfile(AdminStoreRequest $request)
    {
        //dd($request);
        $validatedData = $request->validated();
        $id = Auth::User()->id;
        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if($request->file('photo'))
        {
            if($data->photo != null)
            {
                unlink($data->photo);
            }
            $photo = $request->file('photo');
            $photoName = date("Y-m-d").'.'.rand().'.'.time().'.'.$photo->getClientOriginalExtension();
            $directory = 'upload/admin/profile/';
            $photo->move($directory,$photoName);
            $data->photo = $directory.$photoName;
            
        }
        $data->save();
        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success',
        );

        return back()->with($notification);
    }

    public function ChangeAdminPassword()
    {
        $id = Auth::User()->id;
        $user = User::findOrFail($id);
        //dd($user->photo);
        return view('admin.profile.password',compact('user'));   
    }
    public function UpdateAdminPassword(AdminPasswordStore $request)
    {
        $validatedData = $request->validated();
        $id = Auth::User()->id;
        $user = User::findOrFail($id);
        $oldPassword = $user->password;
        $submitPassword = Hash::make($request->oldPassword);
        //dd($request->oldPassword);
        $newPassword = $request->newPassword;
        $confirmPassword = $request->confirmPassword;
        
        if($request->oldPassword == $request->newPassword)
        {
            $notification = array(
                'message' => 'Your old and new password are same',
                'alert-type' => 'error',
            );
            return back()->with($notification);
        }
        else if(Hash::check($request->oldPassword, $user->password))
        {
            $user->password = Hash::make($request->newPassword);
            $user->save();
            $notification = array(
                'message' => 'Password updated successfully',
                'alert-type' => 'success',
            );
            return back()->with($notification);

        }
        else{
            $notification = array(
                'message' => 'Your old password is wrong',
                'alert-type' => 'error',
            );
            return back()->with($notification);
        }

    }
    public function AllUserListForAdmin()
    {
        $users = User::where('role','user')->paginate(10);
        return view('admin.profile.allUser',compact('users'));
    }

    public function AllVendorListForAdmin()
    {
        $vendors = User::where('role','vendor')->paginate(10);
        return view('admin.profile.allVendor',compact('vendors'));
    }
}
