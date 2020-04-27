<?php

namespace App;

use App\Furniture;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function productProps()
    {
        return $this->morphTo('productprops'); // 
    }

    public function getPriceInDolarsAttribute()
    {
        return number_format($this->price / 100, 2, ".", " ") . "$";
    }

}
