<?php

namespace App\Models;

use Eloquence\Behaviours\CamelCasing;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Post extends Model implements HasMedia
{
    use HasMediaTrait, CamelCasing;

    protected $guarded = [];

    public function registerMediaCollection()
    {
        $this->addMediaCollection('posts')->singleFile();
    }

}
