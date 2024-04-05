<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\PreUser;
use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Auth;
use Xenon\LaravelBDSms\Facades\SMS;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;



class AuthOtpController extends Controller
{
    public function generate(Request $request)
    {
        $phone = $request->query('phone');


        return view('auth.otp.otp_Generate',compact('phone'));
    }

    public function loginWithOtp(Request $request)
    {
        $first = $request->input('first');
        $second = $request->input('second');
        $third = $request->input('third');
        $fourth = $request->input('fourth');
        $fifth = $request->input('fifth');
        $sixth = $request->input('sixth');
        
        $user_otp = $first . $second . $third . $fourth . $fifth . $sixth;

        $user_otp = (int)$user_otp;
        $phone = $request->phone;
        $user = PreUser::where('phone', $request->phone)->latest()->first();
        $sent_otp = VerificationCode::where('user_id',$user->id)->value('otp');
        if($user_otp == $sent_otp)
        {
            $user = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
                'phone' => $user->phone,
            ]);
            event(new Registered($user));
        
            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        }
        else
        {
            return redirect()->back()->with('message', 'Your Otp is not Correct');
        }
    }
}
