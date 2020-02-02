<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Eloquence\Behaviours\CamelCasing;

class Category extends Model
{
    use CamelCasing;

    protected $guarded = [];
}
