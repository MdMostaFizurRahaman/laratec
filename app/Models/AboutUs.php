<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class AboutUs extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $guarded = [];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('general')->singleFile();
    }
}
