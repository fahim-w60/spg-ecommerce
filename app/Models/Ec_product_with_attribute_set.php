<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_product_with_attribute_set extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ec_product_with_attribute_sets';
    
    public function attributes()
    {
        return $this->hasOne(Ec_product_attribute::class, 'attribute_set_id', 'id');
    }
}
