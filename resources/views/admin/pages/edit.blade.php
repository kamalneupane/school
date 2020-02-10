@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Update {{$page->title}} Page</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('page.update',['id'=>$page->id]) }}" method="post" class="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Page Title</label>
                        <input type="text" class="form-control" name="title" value="{{$page->title}}" required>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success px-4" type="submit">Update Page</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection