@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            <h3>Create New Users</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post" class="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" name="name" placeholder="User Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="example@example.com" required>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="avatar">Avatar</label>--}}
                    {{--<input type="file" class="form-control" name="avatar">--}}
                    {{--<div class="input-group">--}}
                          {{--<span class="input-group-btn">--}}
                            {{--<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">--}}
                              {{--<i class="fa fa-picture-o"></i> Choose--}}
                            {{--</a>--}}
                          {{--</span>--}}
                        {{--<input id="thumbnail" class="form-control" type="text" name="avatar">--}}
                    {{--</div>--}}
                    {{--<img id="holder" style="margin-top:15px;max-height:100px;">--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="about">About user</label>
                    <textarea name="about" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook link</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Your Facebook ID link">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube Channel link</label>
                    <input type="text" class="form-control" name="youtube" placeholder="Your Youtube channel link">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success px-4" type="submit">Create New User</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@stop