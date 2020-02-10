@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Carousels</h3>
                <a href="{{ route('carousel.create') }}" class="btn btn-info">Create Carousel</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Carousel Name</th>
                        <th>Carousel Image</th>
                        <th>Carousel Short Description</th>
                        <th>Actions</th>
                    </tr>
                    @if($carousels->count()>0)
                    @foreach($carousels as $carousel)
                    <tr>
                    <td>{{ $carousel->id }}</td>
                        <td>{{ $carousel->title }}</td>
                        <td>
                            <img src="{{ $carousel->image }}"  alt="{{ $carousel->image }}" style="max-width: 400px;max-height: 175px" >
                        </td>
                        <td>{{ $carousel->short_desc }}</td>
                    <td>


                    <div class="btn-group">
                    <a href="{{ route('carousel.edit',['id'=>$carousel->id]) }}" class="btn btn-sm btn-info "><i class="far fa-edit"></i> Edit</a>
                    <a href="{{ route('carousel.delete',['id'=>$carousel->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
                    </div>
                    </td>

                    </tr>
                    @endforeach
                    @else
                    <tr>
                    <td  colspan="5" class="text-center"><h4>No Carousels</h4></td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection