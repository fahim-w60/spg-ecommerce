<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_product_attribute_wise_stock extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ec_product_attribute_wise_stocks';

    public function inventory_details()
    {
        return $this->hasOne(Ec_product_attribute::class,'id','attribute_id');
    }
}
