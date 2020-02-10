@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            <h3>Site Settings</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('setting.update',['id'=>$settings->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="site_name">Site Name</label>
                    <input type="text" class="form-control" name="site_name" value="{{ $settings->site_name }}" required>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" name="contact_number" value="{{ $settings->contact_number }}">
                </div>
                <div class="form-group">
                    <label for="contact_email">Contact Email</label><br>
                    <input type="email" class="form-control" name="contact_email" value="{{ $settings->contact_email }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $settings->address }}" >
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="url" class="form-control" name="facebook" value="{{ $settings->facebook }}" >
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="url" class="form-control" name="twitter" value="{{ $settings->twitter }}" >
                </div>
                <div class="form-group">
                    <label for="linkedin">Linked In</label>
                    <input type="url" class="form-control" name="linkedin" value="{{ $settings->linkedin }}" >
                </div>
                <div class="form-group">
                    <label for="google">google</label>
                    <input type="url" class="form-control" name="google" value="{{ $settings->google }}" >
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="url" class="form-control" name="youtube" value="{{ $settings->youtube }}" >
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="url" class="form-control" name="instagram" value="{{ $settings->instagram }}" >
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success px-4" type="submit">Update Site Settings</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection