<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_product_attribute extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'ec_product_attributes';

    public function translations()
    {
        return $this->hasOne(Ec_product_attribute_translation::class,'attribute_id');
    }
}
