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

    public function getDimensionsAttribute()
    {
        return  'Dimension: ' . $this->height . 'x' . $this->width . 'x' . $this->length;
    }
}
