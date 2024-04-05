<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_product_with_multiImages extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table="ec_product_with_multi_images";
    public function image_detail()
    {
        return $this->hasOne(Ec_multiImages::class, 'id','multiImage_id');
    }
}
