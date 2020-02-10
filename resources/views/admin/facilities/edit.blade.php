@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title text-center">Edit Facility: {{ $facility->name }} </h3>
        </div>
        <div class="card-body">
            <form action="{{ route('facility.update',['id'=>$facility->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Facility Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $facility->name }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Facility Image/Icon</label>
                    {{--<input type="file" class="form-control" name="featured" >--}}
                    <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                            </a>
                          </span>
                        <input id="thumbnail" class="form-control" type="text" name="image" value="{{ $facility->image }}">
                    </div>
                    <img id="holder" class="img-thumbnail" src="{{ $facility->image }}" style="margin-top:15px;max-height:100px;">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" value="{{ $facility->description }}" required>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success px-4" type="submit">Update Facility</button>
                    </div>
                </div>

            </form>

        </div>
    </div>



@stop