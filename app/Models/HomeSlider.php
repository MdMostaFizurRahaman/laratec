<?php

namespace App\Models;

use Eloquence\Behaviours\CamelCasing;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class HomeSlider extends Model implements HasMedia
{
    use HasMediaTrait, CamelCasing;

    protected $guarded = [];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('slider')->singleFile();
    }
}


