<?php

namespace App\Http\Controllers\vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class VendorController extends Controller
{
    public function VendorDashboard()
    {
        return view('vendor.index');
    }
}
