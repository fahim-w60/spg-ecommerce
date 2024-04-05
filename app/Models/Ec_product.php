<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ec_products';

    public function translations()
    {
        return $this->hasOne(Ec_product_translation::class, 'ec_products_id');
    }
    public function categories()
    {
        return $this->hasOne(Ec_product_category_product::class,  'product_id', 'id')->with(['category_detail']);
    }
    public function brands()
    {
        return $this->hasOne(Ec_brand::class, 'id', 'brand_id');
    }
    public function multi_images()
    {
        return $this->hasMany(Ec_product_with_multiImages::class,  'product_id', 'id')->with(['image_detail']);
    }
    public function videos()
    {
        return $this->hasMany(Ec_product_video::class, 'product_id', 'id')->with(['video_detail']);
    }
    public function attribute_set()
    {
        return $this->hasOne(Ec_product_with_attribute_set::class,'product_id','id')->with(['attributes']);
    }
    public function inventory_stocks()
    {
        return $this->hasMany(Ec_product_attribute_wise_stock::class,'product_id','id')->with(['inventory_details']);
    }
}
