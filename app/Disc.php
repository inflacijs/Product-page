<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
    protected $guarded = [];
    
    public function product()
    {
        return $this->morphOne('App\Product', 'productprops');
    }
}
