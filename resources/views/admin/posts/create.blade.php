@extends ('layouts.app')
@section('content')
   <div class="container-fluid">
       <div class="card">
           <div class="card-header bg-primary">
               <h3>Create New Post</h3>
           </div>
           <div class="card-body">
               <form method="post" class="form" action="{{ route('post.store') }}" enctype="multipart/form-data">
                   {{ csrf_field() }}
                   <div class="form-group">
                       <label for="title">Title</label>
                       <input type="text" class="form-control" name="title" placeholder="Post Title" required>
                   </div>
                   <div class="form-group">
                       <label for="featured">Post Image</label>
                       {{--<input type="file" class="form-control" name="featured" >--}}
                       <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                            </a>
                          </span>
                           <input id="thumbnail" class="form-control" type="text" name="featured">
                       </div>
                   <img id="holder" class="img-thumbnail" style="margin-top:15px;max-height:100px;">
                   </div>
                   <div class="form-group">
                       <label for="category">Select a Category</label><br>
                       <select name="category_id" id="category" class="form-control">
                           @foreach($pages as $page)
                               <optgroup label="{{ $page->title }}">
                                   @foreach($categories as $category)
                                       @if($category->page_id == $page->id)
                                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                                       @endif
                                   @endforeach
                               </optgroup>
                           @endforeach
                           {{--@foreach($categories as $categories)--}}
                               {{--<option value="{{ $categories->id }}">--}}
                                   {{--{{ $categories->name }}--}}
                               {{--</option>--}}
                           {{--@endforeach--}}
                       </select>
                   </div>
                   <div class="form-group">
                       <label for="tags">Select Tags</label><br>
                       @foreach($tags as $tag)
                           <label>
                               <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->name }}
                           </label>
                       @endforeach
                   </div>
                   <div class="form-group">
                       <label for="description">Description</label>
                       <textarea class="form-control texteditor" name="description" placeholder="Post Description..." ></textarea>
                   </div>
                   <div class="form-group">
                       <div class="text-center">
                           <button class="btn btn-success px-4" type="submit">Store Post</button>
                       </div>
                   </div>


               </form>
           </div>
       </div>
   </div>
@endsection
