<?php

namespace App\Models;

use Eloquence\Behaviours\CamelCasing;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class FeatureSection extends Model implements HasMedia
{
    use CamelCasing, HasMediaTrait;

    protected $guarded = [];

    public function registerMediaCollection()
    {
        $this->addMediaCollection('general')->singleFile();
    }
}
