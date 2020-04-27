<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    
    public function product()
    {
        return $this->morphOne('App\Product', 'productprops');
    }

    public function getWeightAttribute($value)
    {
        return 'Weight: ' . number_format($value / 1000, 2, ".", " ") . " KG";
    }
}
