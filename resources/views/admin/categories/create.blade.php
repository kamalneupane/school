@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
            <h3>Create New Category for {{ $page->title }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store',['page_id'=>$page->id]) }}" method="post" class="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Category Name" required>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success px-4" type="submit">Store Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection