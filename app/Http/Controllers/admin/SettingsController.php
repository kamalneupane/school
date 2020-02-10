<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Session;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.settings')->with('settings',Setting::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        //
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
            'site_name'=>'required',
            'contact_number'=>'required',
            'contact_email'=>'required|email',
            'address'=>'required',
            'facebook'=>'url',
            'twitter'=>'url',
            'linkedin'=>'url',
            'google'=>'url',
            'youtube'=>'url',
            'instagram'=>'url',

        ]);
        $settings=Setting::find($id);
        $settings->site_name=$request->site_name;
        $settings->contact_number=$request->contact_number;
        $settings->contact_email=$request->contact_email;
        $settings->address=$request->address;
        $settings->facebook=$request->facebook;
        $settings->twitter=$request->twitter;
        $settings->linkedin=$request->linkedin;
        $settings->google=$request->google;
        $settings->youtube=$request->youtube;
        $settings->instagram=$request->instagram;

        if($settings->save())
        {
            Session::flash('success','Settings Updated Successfully');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
