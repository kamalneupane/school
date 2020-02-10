@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Posts</h3>
                <a href="{{ route('post.create') }}" class="btn btn-info">Create Post</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Featured</th>
                    <th>Post Title</th>
                    <th>Category</th>
                    <!-- <th>Content</th> -->
                    <th>Action</th>
                </tr>

                @if($posts->count()>0)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="80px" height="80px"></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                        <!--    <td>{{ $post->description }}</td> -->
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn btn-sm btn-info"><i class="far fa-edit"></i>Edit</a>
                                    <a href="{{ route('post.delete',['id'=>$post->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td  colspan="5" class="text-center"><h4>No Published Posts</h4></td>
                    </tr>
                    @endif
                    </table>

            </div>
        </div>
    </div>
@endsection