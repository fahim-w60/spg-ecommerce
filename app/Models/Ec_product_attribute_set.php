<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_product_attribute_set extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'ec_product_attribute_sets';

    public function translations()
    {
        return $this->hasOne(Ec_product_attribute_set_translation::class, 'attribute_set_id');
    }

    // public function attribute_detail()
    // {
    //     return $this->hasOne()
    // }
}
