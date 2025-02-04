<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LanguageController extends Controller
{
    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
       
        session()->put('locale', $request->lang);
        
  
        return response()->json(['success' => 'Language changed successfully.']);
    }
}
