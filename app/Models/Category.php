<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Eloquence\Behaviours\CamelCasing;

class Category extends Model
{
    use CamelCasing;

    protected $guarded = [];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getLatestProductsAttribute()
    {
        return $this->products()->orderBy('id', 'desc');
    }
}
