<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Status;
use Session;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.status.index')->with('status',Status::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.status.create');
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
            'title' => 'required',
            'image'=>'required',
            'counter'=>'required'
        ]);
        try{
            $status=Status::create([
                'title'=>$request->title,
                'image'=>$request->image,
                'counter'=>$request->counter,
            ]);
            if($status->save()) {
                Session::flash('success', 'Status Created Successfully');
                return redirect()->back();
            }
        } catch(\Exception $e) {
//            echo 'Categories cannot be same';
            Session::flash('warning','Status cannot be Duplicate!!');
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
        $status = Status::find($id);
        return view('admin.status.edit')->with('status',$status);
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
            'title' => 'required',
            'image'=>'required',
            'counter'=>'required'
        ]);

            $status = Status::find($id);
            $status->title=$request->title;
            $status->image=$request->image;
            $status->counter=$request->counter;
            if($status->save()) {
                Session::flash('success', 'Status Updated Successfully');
                return redirect()->route('status');

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
        $status=Status::find($id);
        if($status->forceDelete())
        {
            Session::flash('warning','Status Deleted ');
        }
        return redirect()->back();
    }
}
