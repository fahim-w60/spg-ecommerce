<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ec_product_categories;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $parent_categories = Ec_product_categories::where('status', 1)->where('level',1)->with('hasChild')->get();

        $all_categories = Ec_product_categories::where('status',1)->withCount('totalProduct')->get();
        
        return view('frontend.index', compact('parent_categories','all_categories'));
    }
    
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

}
