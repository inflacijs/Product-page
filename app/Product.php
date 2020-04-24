<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productProps()
    {
        return $this->morphTo('productprops');
    }

}
