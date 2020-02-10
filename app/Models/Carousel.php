<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Carousel extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = "carousels";
    protected $guarded = [];

    public function registerMediaCollection()
    {
        $this->addMediaCollection('logo')->singleFile()->withResponsiveImages();
    }
}
