@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Categories</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Page Title</th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                    @if($pages->count()>0)
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->title }}</td>
                                <td>
                                    @foreach($categories as $category)
                                        @if($category->page_id == $page->id)
                                            {{ $category->name }}
                                            <span class="float-right">
                                                <a href="{{ route('category.edit',['id'=>$category->id]) }}" class="text-primary"><i class="far fa-edit fa-sm"></i></a>
                                                <a href="{{ route('category.delete',['id'=>$category->id]) }}" class="text-danger"><i class="fas fa-trash fa-sm"></i></a>
                                            </span>
                                            <hr class="m-0">
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('category.create',['page_id'=>$page->id]) }}" class="btn btn-sm btn-info "><i class="fas fa-plus"></i> Add Category</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                             <td  colspan="4" class="text-center"><h4>No Pages Created Yet</h4></td>
                        </tr>
                    @endif
                    {{--@if($categories->count()>0)--}}
                  {{--@foreach($categories as $category)--}}
                        {{--<tr>--}}
                            {{--<td>{{ $category->id }}</td>--}}
                            {{--<th>Page Title</th>--}}
                            {{--<td>{{ $category->name }}</td>--}}
                            {{--<td>--}}
                                {{--<div class="btn-group">--}}
                                    {{--<a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-sm btn-info "><i class="far fa-edit"></i> Edit</a>--}}
                                    {{--<a href="{{ route('category.delete',['id'=>$category->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>--}}
                                {{--</div>--}}
                            {{--</td>--}}

                        {{--</tr>--}}
                        {{--@endforeach--}}
                    {{--@else--}}
                        {{--<tr>--}}
                            {{--<td  colspan="3" class="text-center"><h4>No Categories</h4></td>--}}
                        {{--</tr>--}}
                    {{--@endif--}}
                </table>
            </div>
        </div>
    </div>
@endsection