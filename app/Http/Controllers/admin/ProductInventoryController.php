<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\InventoryStoreRequest;
use App\Models\Ec_product_attribute_wise_stock;
use App\Models\Ec_product_attribute_set;
use App\Http\Requests\admin\InventoryUpdateRequest;

class ProductInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store(InventoryStoreRequest $request)
    {
        //dd($request);
        $previous_attribute_ids = Ec_product_attribute_wise_stock::pluck('attribute_id')->toArray();
        if (in_array($request->attribute_id, $previous_attribute_ids)) {
            // dd('error');
            return response()->json([
                'message' => 'This Attribute Stored Previously',
                'alert-type' => 'error'
            ]);
           
        }
        else{
            $data = new Ec_product_attribute_wise_stock();
            $data->product_id = $request->product_id;
            $data->attribute_id = $request->attribute_id;
            $data->price = $request->inventory_price ? $request->inventory_price : null;
            $data->sale_price = $request->inventory_sale_price ? $request->inventory_sale_price : null;
            $data->stock = $request->inventory_quantity ? $request->inventory_quantity : null;
            $data->status = 1;
            $data->save();


            return response()->json([
                'message' => 'Inventory Stored Successfully',
                'alert-type' => 'success'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
    public function update(InventoryUpdateRequest $request, string $id)
    {
        
          $data =  Ec_product_attribute_wise_stock::findOrFail($id);
          $previous_attribute_ids = Ec_product_attribute_wise_stock::pluck('attribute_id')->toArray();
          if (in_array($request->attribute_id, $previous_attribute_ids) && $data->attribute_id != $request->attribute_id) {
              return response()->json([
                  'message' => 'This Attribute Stored Previously',
                  'alert-type' => 'error'
              ]);
             
          }
          else{
            
              $data->product_id = $request->product_id;
              $data->attribute_id = $request->attribute_id;
              $data->price = $request->inventory_price ? $request->inventory_price : null;
              $data->sale_price = $request->inventory_sale_price ? $request->inventory_sale_price : null;
              $data->stock = $request->inventory_quantity ? $request->inventory_quantity : null;
              $data->save();
  
  
              return response()->json([
                  'message' => 'Inventory Updated Successfully',
                  'alert-type' => 'success'
              ]);
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Ec_product_attribute_wise_stock::findOrFail($id);
        $data->status = 0;
        $data->save();
        $data['status']=200;
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }
    public function getInventoryDetails($id){
        $datas = Ec_product_attribute_wise_stock::with(['inventory_details'])->findOrFail($id);
        if ($datas) {
            //dd($data->inventory_details->attribute_set_id);
            //$attribute_set = Ec_product_attribute_set::findOrFail($data->inventory_details->attribute_set_id);
            $data['attribute'] = $datas->attribute_id;
            $data['attribute_set_id'] = $datas->inventory_details->attribute_set_id;
            $data['product_id'] = $datas->product_id;
            $data['price'] = $datas->price;
            $data['sale_price'] = $datas->sale_price; 
            $data['quantity'] = $datas->stock;
            return response()->json($data);
        } else {
            // return response()->json(['error' => 'Inventory not found'], 404);
        }
    }
}
