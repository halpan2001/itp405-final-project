<!-- EDIT PROFILE -->

@extends('layout')
@section('title', 'Edit Profile')
@section('main')

<div class="row justify-content-md-center">
  <div class="text-center shadow p-3 mb-5 bg-white rounded w-50 p-5" >
    <h2>Edit Profile</h2>
    <form class="text-left" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"
        value="{{ old('name') != null ? old('name'): $profile->name}}">
        <small id="name" class="form-text text-danger">{{$errors->first('name')}}</small>
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email"
        value="{{ old('email') != null ? old('email'): $profile->email}}">
        <small id="name" class="form-text text-danger">{{$errors->first('email')}}</small>
      </div>
      <div class="form-group">
        <label for="image">Image</label><br />
        <small>Previous image you uploaded, update?</small>
        <image class="img-thumbnail" src="{{url('uploads/'.$profile->profile_photo)}}"></image>
        <input type="file" class="form-control" id="image" name="image"></input>
      </div>
      <input type="submit" class="btn btn-primary" value="Update Profile"></input>
    </form>
    <div class="text-left">
      Been here before? <a href="/login">Login</a>
    </div>
  </div>
</div>

@endsection
