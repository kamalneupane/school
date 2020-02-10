<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable=[
        'name','company','message','image','email'
    ];
}
