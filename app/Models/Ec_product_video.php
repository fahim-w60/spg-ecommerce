<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_product_video extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table="ec_product_videos";
    public function video_detail()
    {
        return $this->hasOne(Ec_video::class, 'id','video_id');
    }
}
