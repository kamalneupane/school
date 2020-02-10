@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Pages
                </h3>
                <a href="{{ route('page.create') }}" class="btn btn-info">Create Page</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Page Title</th>
                        <th>Actions</th>
                    </tr>
                    @if($pages->count()>0)
                  @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->id }}</td>
                            <td>{{ $page->title }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('page.edit',['id'=>$page->id]) }}" class="btn btn-sm btn-info "><i class="far fa-edit"></i> Edit</a>
                                    <a href="{{ route('page.delete',['id'=>$page->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td  colspan="3" class="text-center"><h4>No Pages</h4></td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection