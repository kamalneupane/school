<?php

namespace App\Http\Controllers\admin;

use App\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CarouselsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.carousels.index')->with('carousels',Carousel::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousels.create');
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
                'title'=>'required|max:255',
                'short_desc'=>'required',
                'image'=>'required'
            ]);
            $carousel=new Carousel;
            $carousel->title=$request->title;
            $carousel->short_desc=$request->short_desc;
            $carousel->image=$request->image;
            if($carousel->save())
            {
            Session::flash('success','Carousel created Successfully');
        }
        return redirect()->back();
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
        $carousel=Carousel::find($id);
        return view('admin.carousels.edit')->with('carousel',$carousel);
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
            'title'=>'required|max:255',
            'short_desc'=>'required',
            'image'=>'required'
        ]);
        $carousel = Carousel::find($id);
        $carousel->title=$request->title;
        $carousel->short_desc=$request->short_desc;
        $carousel->image=$request->image;
        if($carousel->save())
        {
            Session::flash('success','Carousel Updated Successfully');
        }
        return redirect()->route('carousels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        if($carousel->forceDelete())
        {
            Session::flash('warning','Carousel Deleted ');
        }
        return redirect()->back();
    }
}
