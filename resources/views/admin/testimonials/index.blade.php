@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Posts</h3>
                <a href="{{ route('testimonial.create') }}" class="btn btn-info">Create Testimonial</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>

                @if($testimonials->count()>0)
                    @foreach($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->id }}</td>
                            <td><img src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}" width="80px" height="80px"></td>
                            <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->email }}</td>
                            <td>{!! $testimonial->message !!}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('testimonial.edit',['id'=>$testimonial->id]) }}" class="btn btn-sm btn-info"><i class="far fa-edit"></i>Edit</a>
                                    <a href="{{ route('testimonial.delete',['id'=>$testimonial->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td  colspan="6" class="text-center"><h4>No Testimonials Yet</h4></td>
                    </tr>
                    @endif
                    </table>

            </div>
        </div>
    </div>
@endsection