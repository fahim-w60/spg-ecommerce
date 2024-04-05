<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
        
    }

    public function callbackFacebook()
    {
        
        try {
            
            $facebook_user = Socialite::driver('facebook')->user();

            $user = User::where('facebook_id', $facebook_user->id)->first();

            $mail_user = User::where('email',$facebook_user->email)->first();
            
            if($mail_user)
            {
                Auth::login($mail_user);
                return redirect()->route('user.dashboard');
            }
            
            else if(!$user) {
                $new_user = User::create([
                    'name' => $facebook_user->name,
                    'email' => $facebook_user->email,
                    'facebook_id' => $facebook_user->id,
                    'password' => Hash::make('123456'),
                ]);

                Auth::login($new_user);

                return redirect()->route('user.dashboard');
            }
             
            else {
                
                Auth::login($user);
                return redirect()->route('user.dashboard');
            }
           
        } catch (\Throwable $th) {
            
            dd('Something Went Wrong! ' . $th->getMessage());
        }
        
    }
}
