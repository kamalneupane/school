<?php

namespace App\Http\Controllers\admin;

use App\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.facilities.index')->with('facilities',Facility::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facilities.create');
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
            'description'=>'required'
        ]);
        try{
            $facility=Facility::create([
                'name'=>$request->name,
                'image'=>$request->image,
                'description'=>$request->description,
            ]);
            if($facility->save()) {
                Session::flash('success', 'Facility Created Successfully');
                return redirect()->back();
            }
        } catch(\Exception $e) {
//            echo 'Categories cannot be same';
            Session::flash('warning','Facility cannot be Duplicate!!');
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
        $facility = Facility::find($id);
        return view('admin.facilities.edit')->with('facility',$facility);

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
            'description'=>'required'
        ]);

        $facility=Facility::find($id);
        $facility->name=$request->name;
        $facility->image=$request->image;
        $facility->description=$request->description;
        if($facility->save()) {
            Session::flash('success', 'Facility Updated Successfully');
            return redirect()->route('facilities');
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
        $facility=Facility::find($id);
               if($facility->forceDelete())
        {
            Session::flash('warning','Facility Deleted ');
        }
        return redirect()->back();
    }
}
