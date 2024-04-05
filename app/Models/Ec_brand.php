<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ec_brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'ec_brands';

    public function translations()
    {
        return $this->hasOne(Ec_brand_translation::class, 'ec_brands_id');
    }
}
