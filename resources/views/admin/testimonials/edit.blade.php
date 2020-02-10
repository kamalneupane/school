@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title text-center">Edit Testimonial of: {{ $testimonial->name }} </h3>
        </div>
        <div class="card-body">
            <form action="{{ route('testimonial.update',['id'=>$testimonial->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}" required>
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" name="company" value="{{ $testimonial->company }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $testimonial->email }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Post Image</label>
                    {{--<input type="file" class="form-control" name="featured">--}}
                    <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                            </a>
                          </span>
                        <input id="thumbnail" class="form-control" type="text" name="image" value="{{ $testimonial->image }}">
                    </div>
                    <img id="holder" class="img-thumbnail" style="margin-top:15px;max-height:100px;" src="{{ asset("$testimonial->image") }}" alt="{{ $testimonial->name }}">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control texteditor" name="message" >
                        {{ $testimonial->message }}
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