<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable=[
        'title','short_desc','image'
    ];
}
