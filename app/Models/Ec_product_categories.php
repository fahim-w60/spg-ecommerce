<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_product_categories extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ec_product_categories';

    public function translations()
    {
        return $this->hasOne(Ec_product_categories_translation::class, 'categories_id')->where('lang_code','bn');
    }

    public function hasChild()
    {
        return $this->hasMany(Ec_product_categories::class,'parent_id','id');
    }
    public function totalProduct()
    {
        return $this->hasOne(Ec_product_category_product::class,'category_id');
    }
}
