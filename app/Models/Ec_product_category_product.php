<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_product_category_product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table="ec_product_category_products";

    public function products()
    {
        return $this->hasMany(Ec_product::class, 'category_id');
    }

    public function category_detail()
    {
        return $this->hasOne(Ec_product_categories::class, 'id','category_id');
    }
}
