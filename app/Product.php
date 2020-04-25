<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function productProps()
    {
        return $this->morphTo('productprops'); // 
    }

}
