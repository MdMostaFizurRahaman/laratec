<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $guarded = [];

    public function registerMediaCollection()
    {
        $this->addMediaCollection('product-image')->singleFile();
        $this->addMediaCollection('product-home')->singleFile();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
