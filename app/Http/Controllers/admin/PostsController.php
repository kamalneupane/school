<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\Post;
use App\Category;
use App\Tag;
use Session;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages=Page::all();
        $categories= Category::all();
        $tags= Tag::all();
        if($categories->count()==0 || $tags->count()==0)
        {
            Session::flash('info','You must have some Category and Tags before creating post');
            return redirect()->back();
        }
        return view('admin.posts.create')
            ->with('pages',$pages)
            ->with('categories',Category::all())
            ->with('tags',Tag::all());
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
            'category_id'=>'required',
            'description'=>'required'
        ]);

        $post=Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            'featured'=>$request->featured,
            'slug'=>Str::slug($request->title)
        ]);
        $post->tags()->attach($request->tags);
        if($post->save()) {
            Session::flash('success', 'Post Created Successfully');
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
        $post = Post::find($id);
        return view('admin.posts.edit')->with('post',$post)->with('categories',Category::all())->with('tags',Tag::all());
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
            'category_id'=>'required',
            'description'=>'required'
        ]);
        $post = Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->category_id=$request->category_id;
        $post->featured=$request->featured;
        $post->slug=Str::slug($request->title);
        $post->tags()->sync($request->tags);
        if($post->save()) {
            Session::flash('success', 'Post Updated Successfully');
        }
        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->sync([]);
        if($post->forceDelete())
        {
            Session::flash('warning','Post Deleted ');
        }
        return redirect()->back();
    }
}
