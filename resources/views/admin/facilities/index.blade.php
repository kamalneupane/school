@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Facilities</h3>
                <a href="{{ route('facility.create') }}" class="btn btn-info">Create Facility</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Facility Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>

                @if($facilities->count()>0)
                    @foreach($facilities as $facility)
                        <tr>
                            <td>{{ $facility->id }}</td>
                            <td><img src="{{ $facility->image }}" alt="{{ $facility->name }}" width="80px" height="80px"></td>
                            <td>{{ $facility->name }}</td>
                            <td>{{ $facility->description }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('facility.edit',['id'=>$facility->id]) }}" class="btn btn-sm btn-info"><i class="far fa-edit"></i>Edit</a>
                                    <a href="{{ route('facility.delete',['id'=>$facility->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td  colspan="5" class="text-center"><h4>No Facilities Yet</h4></td>
                    </tr>
                    @endif
                    </table>

            </div>
        </div>
    </div>
@endsection