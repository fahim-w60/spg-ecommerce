<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle()
    {
        try{

            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            $mail_user = User::where('email',$google_user->getEmail())->first();

            if($mail_user)
            {
                Auth::login($mail_user);
                return redirect()->route('user.dashboard');
            }
            else if(!$user)
            {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'password' => Hash::make('123456'),
                    
                ]);   
                
                Auth::login($new_user);

                return redirect()->route('user.dashboard');
            }
            else{
              
                Auth::login($user);
                return redirect()->route('user.dashboard');

            }
        }
        catch(\Throwable $th){
            dd('Something Went Wrong! '.$th->getMessage());
        }
    }
}
