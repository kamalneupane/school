<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<!--Styles-->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!--Fontawesome-->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">


    <!-- Custom Styles -->
    <link href="{{ asset('css/adminstyle.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<!--Toast popups-->
@if(Session::has('success'))
    <div class="toast bg-success">
        <div class="toast-body text-light">
            {{ Session::get('success') }}
        </div>
    </div>
@endif
@if(Session::has('info'))
    <div class="toast bg-info">
        <div class="toast-body text-light">
            {{ Session::get('info') }}
        </div>
    </div>
@endif
@if(Session::has('warning'))
    <div class="toast bg-danger">
        <div class="toast-body text-light">
            {{ Session::get('warning') }}
        </div>
    </div>
@endif
{{--@if(Session::has('warning'))--}}
    {{--@include('admin.flash_messages.errors');--}}
{{--@endif--}}
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{route('user.profile')}}">Profile</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="row mr-0">
                @if(Auth::check())
                <div class="col-md-3" >
                       <aside class="main-sidebar">
                           <h3 class="title">Dashboard</h3>
                           <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                               <div class="panel panel-default">
                                   <div class="panel-heading"  >
                                       <a data-toggle="modal" data-target="#mediaModal" class="text-light">
                                           Media
                                       </a>
                                       <!-- The Modal -->
                                       <div class="modal fade" id="mediaModal">
                                           <div class="modal-dialog modal-lg modal-dialog-centered">
                                               <div class="modal-content">
                                                   <!-- Modal Header -->
                                                   <div class="modal-header">
                                                       <h4 class="modal-title">Media Manager</h4>
                                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                   </div>
                                                   <!-- Modal body -->
                                                   <div class="modal-body m-0 p-0">
                                                       <iframe src="{{ asset('admin/media') }}" style="width: 100%;border: none;height: 64vh;"></iframe>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="panel panel-default">
                                   <div class="panel-heading"  >
                                           <a  href="{{ route('pages') }}">
                                               Pages
                                           </a>
                                   </div>
                               </div>
                               <div class="panel panel-default">
                                   <div class="panel-heading"  >
                                       <a  href="{{ route('categories') }}">
                                           Categories
                                       </a>
                                   </div>
                               </div>
                               <div class="panel panel-default">
                                   <div class="panel-heading"  >
                                       <a href="{{ route('posts') }}">Posts</a>
                                   </div>
                               </div>
                               <div class="panel panel-default">
                                   <div class="panel-heading"  >
                                       <a href="{{ route('tags') }}">
                                           Tags
                                       </a>
                                   </div>
                               </div>
                               <div class="panel panel-default">
                                   <div class="panel-heading"  >
                                       <a href="{{ route('carousels') }}">
                                           Carousels
                                       </a>
                                   </div>
                               </div>
                               <div class="panel panel-default">
                                   <div class="panel-heading"  >
                                       <a href="{{ route('facilities') }}">
                                           Facilities
                                       </a>
                                   </div>
                               </div>
                               <div class="panel panel-default">
                                   <div class="panel-heading"  >
                                       <a href="{{ route('status') }}">
                                           Status
                                       </a>
                                   </div>
                               </div>
                               <div class="panel panel-default">
                                   <div class="panel-heading"  >
                                       <a href="{{ route('testimonials') }}">
                                           Testimonials
                                       </a>
                                   </div>
                               </div>

                               @if(Auth::user()->admin)
                                   <div class="panel panel-default">
                                       <div class="panel-heading"  >
                                               <a href="{{ route('users') }}">Users</a>
                                       </div>
                                   </div>
                                   <div class="panel panel-default">
                                       <div class="panel-heading"  >
                                               <a  href="{{route('settings')}}">
                                                   Settings
                                               </a>
                                       </div>
                                   </div>
                                   @endif
                           </div>
                       </aside>

                </div>
                @endif
                <div class="col-md-9 p-3">
                    @yield('content')
                 </div>
            </div>

        </main>
    </div>
<!--Scripts-->
<script src="{{ asset('js/jquery.slim.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>


{{--laravel file manager--}}

<script>
    var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
</script>

<!-- CKEditor init -->
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('.texteditor').ckeditor({
        height: 150,
        filebrowserImageBrowseUrl: route_prefix + '?type=Images',
        filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: route_prefix + '?type=Files',
        filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
    });
</script>


<script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
</script>
<script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    $('#lfm2').filemanager('file', {prefix: route_prefix});
</script>

@yield('footer-plugins')
</body>
</html>
