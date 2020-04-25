<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    
    public function product()
    {
        return $this->morphOne('App\Product', 'productprops');
    }
}
