<?php

namespace App\Http\Controllers\admin;

use App\Page;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index')
            ->with('categories',Category::all())
            ->with('pages',Page::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($page_id)
    {
        $page=Page::find($page_id);
        $categories=Category::all();
        return view('admin.categories.create')->with('page',$page)->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$page_id)
    {
        $this->validate($request,[
            'name' => 'required|max:255'
        ]);
        try{
            $category = new Category;
            $category->page_id=$page_id;
            $category->name=$request->name;
            $category->slug=Str::slug($request->name);
            if($category->save())
            {
                Session::flash('success','Category Created Successfully');
            }
            return redirect()->route('categories');
        } catch(\Exception $e) {
//            echo 'Categories cannot be same';
            Session::flash('warning','Category cannot be Duplicate!!');
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
        $category = Category::find($id);
        $pages=Page::all();
        return view('admin.categories.edit')->with('category',$category)->with('pages',$pages);
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
        $category = Category::find($id);
        $category->page_id=$request->page_id;
        $category->name=$request->name;
        $category->slug=Str::slug($request->name);
        if($category->save())
        {
            Session::flash('success','Category Updated Successfully');
        }
        return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        foreach($category->posts as $post)
        {
            $post->forceDelete();
        }
        if($category->forceDelete())
        {
            Session::flash('warning','Category Deleted ');
        }
        return redirect()->back();
    }
}
