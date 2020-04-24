<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    public function product()
    {
        return $this->morphOne('App\Product', 'productprops');
    }
}
