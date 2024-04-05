<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\VideoStroeRequest;
use App\Http\Requests\admin\VideoUpdateRequest;
use App\Models\Ec_video;
use App\Models\Ec_product_video;
use Illuminate\Support\Facades\DB;

class ProductVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(VideoStroeRequest $request)
    {
        DB::beginTransaction();
        try {
            //dd($request);
            $data = new Ec_video();
            $data->product_id = $request->product_id;
            $data->video_link = $request->video_link;
            $data->video_type = $request->video_provider;
            $data->save();
            $prdouct_video = new Ec_product_video();
            $prdouct_video->product_id = $request->product_id;
            $prdouct_video->video_id = $data->id;
            $prdouct_video->save();

            DB::commit();
            return response()->json([
                'message' => 'Video Stored Successfully',
                'alert-type' => 'success',
            ]);
        }
        catch(\Exception $e) {
            DB::rollback();
     
             $notification = array(
                 'message' => 'Failed to store video. Please try again.',
                 'alert-type' => 'error',
             );
        }
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
    public function update(VideoUpdateRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            //dd($request);
            $data = Ec_video::findOrFail($id);
            $data->product_id = $request->product_id;
            $data->video_link = $request->video_link;
            $data->video_type = $request->video_type;
            $data->save();


            DB::commit();
            return response()->json([
                'message' => 'Video Updated Successfully',
                'alert-type' => 'success',
            ]);
        }
        catch(\Exception $e) {
            DB::rollback();
     
             $notification = array(
                 'message' => 'Failed to store video. Please try again.',
                 'alert-type' => 'error',
             );
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Ec_video::findOrFail($id);
        $data->delete();
        $data['message']="Data Deleted Successfully";
        return json_encode($data);
    }

    public function getVideoDetails($id)
    {
        $datas = Ec_video::findOrFail($id);
        if($datas)
        {
            $data['video_link'] = $datas->video_link;
            $data['video_type'] = $datas->video_type;
            return response()->json($data);
        }
    }
}
