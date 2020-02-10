<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\Category;
use App\Carousel;
use App\Facility;
use App\Testimonial;

class FrontendController extends Controller
{
    public function index()
    {   
        
        $pages=Page::with('categories')->get();
        return view('index')
            ->with('pages',$pages)->with('carousels',Carousel::all())->with('facalities',Facility::all())->with('testimonials',Testimonial::all());
    }
}
