@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title text-center">Edit post: {{ $post->title }} </h3>
        </div>
        <div class="card-body">
            <form action="{{ route('post.update',['id'=>$post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                </div>
                <div class="form-group">
                    <label for="featured">Post Image</label>
                    {{--<input type="file" class="form-control" name="featured">--}}
                    <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                            </a>
                          </span>
                        <input id="thumbnail" class="form-control" type="text" name="featured" value="{{ $post->featured }}">
                    </div>
                    <img id="holder" class="img-thumbnail" style="margin-top:15px;max-height:100px;" src="{{ asset("$post->featured") }}" alt="{{ $post->featured }}">
                </div>
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if($post->category->id == $category->id)
                                    selected
                                    @endif
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <p><label for="tags">Select Tags</label></p>
                    @foreach($tags as $tag)
                        <label>
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                   @foreach($post->tags as $t)
                                   @if($tag->id == $t->id)
                                   checked
                                    @endif
                                    @endforeach

                            >{{ $tag->tag }}
                        </label>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control texteditor" name="description" >
                        {{ $post->description }}
                    </textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success px-4" type="submit">Update Post</button>
                    </div>
                </div>
            </form>

        </div>
    </div>



@stop