<?php

namespace App\Http\Controllers\admin;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimonials.index')->with('testimonials',Testimonial::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

            $testimonial=Testimonial::create([
                'name'=>$request->name,
                'company'=>$request->company,
                'email'=>$request->email,
                'image'=>$request->image,
                'message'=>$request->message,
            ]);
            if($testimonial->save()) {
                Session::flash('success', 'Testimonial Created Successfully');
                return redirect()->back();
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial=Testimonial::find($id);
        return view('admin.testimonials.edit')->with('testimonial',$testimonial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'image'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);
        $testimonial=Testimonial::find($id);
        $testimonial->name=$request->name;
        $testimonial->company=$request->company;
        $testimonial->email=$request->email;
        $testimonial->image=$request->image;
        $testimonial->message=$request->message;
        if($testimonial->save()) {
            Session::flash('success', 'Testimonial Updated Successfully');
            return redirect()->route('testimonials');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::find($id);
        if($testimonial->forceDelete())
        {
            Session::flash('warning','Testimonial Deleted ');
        }
        return redirect()->back();
    }
}
