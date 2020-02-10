<?php

namespace App\Http\Controllers\admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.index')->with('pages',Page::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
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
            'title' => 'required|max:255'
        ]);
        try{
            $page = new Page;
            $page->title=$request->title;
            $page->slug=Str::slug($request->title);
            if($page->save())
            {
                Session::flash('success','Page Created Successfully');
            }
            return redirect()->back();
        } catch(\Exception $e) {
            Session::flash('warning','Page cannot be Duplicate!!');
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
        $page = Page::find($id);
        return view('admin.pages.edit')->with('page',$page);
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
        $page = Page::find($id);
        $page->slug=Str::slug($request->title);
        if($page->save())
        {
            Session::flash('success','Page Updated Successfully');
        }
        return redirect()->route('pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        foreach($page->categories as $category)
        {
            $category->forceDelete();
        }
        if($page->forceDelete())
        {
            Session::flash('warning','Page Deleted ');
        }
        return redirect()->back();
    }
}
