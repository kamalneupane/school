@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title text-center">Edit Status: {{ $status->title }} </h3>
        </div>
        <div class="card-body">
            <form action="{{ route('status.update',['id'=>$status->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Status Name</label>
                    <input type="text" class="form-control" name="title" value="{{ $status->title }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Status Image/Icon</label>
                    {{--<input type="file" class="form-control" name="featured" >--}}
                    <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                            </a>
                          </span>
                        <input id="thumbnail" class="form-control" type="text" name="image" value="{{ $status->image }}">
                    </div>
                    <img id="holder" class="img-thumbnail" src="{{ $status->image }}" style="margin-top:15px;max-height:100px;">
                </div>
                <div class="form-group">
                    <label for="counter">Description</label>
                    <input type="number" name="counter" class="form-control" value="{{ $status->counter }}" required>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success px-4" type="submit">Update Status</button>
                    </div>
                </div>

            </form>

        </div>
    </div>



@stop