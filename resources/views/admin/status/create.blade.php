@extends ('layouts.app')
@section('content')
   <div class="container-fluid">
       <div class="card">
           <div class="card-header bg-primary">
               <h3>Create New Status</h3>
           </div>
           <div class="card-body">
               <form method="post" class="form" action="{{ route('status.store') }}" enctype="multipart/form-data">
                   {{ csrf_field() }}
                   <div class="form-group">
                       <label for="title">Status Title</label>
                       <input type="text" class="form-control" name="title" placeholder="Status Title" required>
                   </div>
                   <div class="form-group">
                       <label for="image">Status Image/Icon</label>
                       {{--<input type="file" class="form-control" name="featured" >--}}
                       <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                            </a>
                          </span>
                           <input id="thumbnail" class="form-control" type="text" name="image">
                       </div>
                   <img id="holder" class="img-thumbnail" style="margin-top:15px;max-height:100px;">
                   </div>
                   <div class="form-group">
                       <label for="counter">Counter</label>
                        <input type="number" name="counter" class="form-control" required>
                   </div>
                   <div class="form-group">
                       <div class="text-center">
                           <button class="btn btn-success px-4" type="submit">Store Status</button>
                       </div>
                   </div>


               </form>
           </div>
       </div>
   </div>
@endsection
