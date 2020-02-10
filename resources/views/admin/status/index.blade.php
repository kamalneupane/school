@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Status</h3>
                <a href="{{ route('status.create') }}" class="btn btn-info">Create Status</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Status Title</th>
                    <th>Counter</th>
                    <th>Action</th>
                </tr>

                @if($status->count()>0)
                    @foreach($status as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td><img src="{{ $s->image }}" alt="{{ $s->title }}" width="80px" height="80px"></td>
                            <td>{{ $s->title }}</td>
                            <td>{{ $s->counter }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('status.edit',['id'=>$s->id]) }}" class="btn btn-sm btn-info"><i class="far fa-edit"></i>Edit</a>
                                    <a href="{{ route('status.delete',['id'=>$s->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td  colspan="5" class="text-center"><h4>No Status Yet</h4></td>
                    </tr>
                    @endif
                    </table>

            </div>
        </div>
    </div>
@endsection