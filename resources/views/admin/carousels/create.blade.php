@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Create New Carousel</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('carousel.store') }}" method="post" class="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Carousel Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Carousel Title" required>
                    </div>
                    <div class="form-group">
                        <label for="featured">Carousel Image</label>
                        {{--<input type="file" class="form-control" name="featured" >--}}
                        <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                            </a>
                          </span>
                            <input id="thumbnail" class="form-control" type="text" name="image" required>
                        </div>
                        <img id="holder" class="img-thumbnail" style="margin-top:15px;max-height:100px;">
                    </div>
                    <div class="form-group">
                        <label for="short_desc">Description</label>
                        <input type="text" class="form-control" name="short_desc" required>
                         </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success px-4" type="submit">Store Carousel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection