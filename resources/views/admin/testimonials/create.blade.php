@extends ('layouts.app')
@section('content')
   <div class="container-fluid">
       <div class="card">
           <div class="card-header bg-primary">
               <h3>Create New Testimonial</h3>
           </div>
           <div class="card-body">
               <form method="post" class="form" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                   {{ csrf_field() }}
                   <div class="form-group">
                       <label for="name">Name</label>
                       <input type="text" class="form-control" name="name" placeholder="Person Name" required>
                   </div>
                   <div class="form-group">
                       <label for="company">Company</label>
                       <input type="text" class="form-control" name="company" placeholder="Company Name">
                   </div>
                   <div class="form-group">
                       <label for="email">Email</label>
                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                   </div>
                   <div class="form-group">
                       <label for="image">Person Image</label>
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
                       <label for="message">Message</label>
                       <textarea class="form-control texteditor" name="message" placeholder="Message..." ></textarea>
                   </div>
                   <div class="form-group">
                       <div class="text-center">
                           <button class="btn btn-success px-4" type="submit">Store Testimonial</button>
                       </div>
                   </div>


               </form>
           </div>
       </div>
   </div>
@endsection
