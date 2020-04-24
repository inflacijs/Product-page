<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function product()
    {
        return $this->morphOne('App\Product', 'productprops');
    }
}
