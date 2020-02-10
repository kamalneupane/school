@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Tags</h3>
                <a href="{{ route('tag.create') }}" class="btn btn-info">Create Tag</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Tag Name</th>
                        <th>Actions</th>
                    </tr>
                    @if($tags->count()>0)
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('tag.edit',['id'=>$tag->id]) }}" class="btn btn-sm btn-info "><i class="far fa-edit"></i> Edit</a>
                                    <a href="{{ route('tag.delete',['id'=>$tag->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <td  colspan="3" class="text-center"><h4>No Tags</h4></td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection