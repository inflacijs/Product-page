<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    
    public function product()
    {
        return $this->morphOne('App\Product', 'productprops');
    }

    public function getSizeAttribute($value)
    {
        return 'Size: ' . $value . ' MB';
    }
}
