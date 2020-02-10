@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Update {{$tag->tag }} Tag</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('tag.update',['id'=>$tag->id]) }}" method="post" class="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Tag Name</label>
                        <input type="text" class="form-control" name="name" value="{{$tag->name}}" required>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success px-4" type="submit">Update Tag</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection