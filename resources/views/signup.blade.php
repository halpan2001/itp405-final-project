@extends('layout')
@section('title', 'Commission-em | Sign Up')
@section('main')
<div class="row justify-content-md-center">
  <div class="text-center shadow p-3 mb-5 bg-white rounded w-50 p-5" >
    <h2>Sign Up</h2>
    <form class="text-left" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="profile">Profile Photo (optional)</label><br />
        <input type="file" class="form-control" id="profile" name="profile"></input>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <input type="submit" class="btn btn-primary" value="Sign Up"></input>
    </form>
    <div class="text-left">
      Been here before? <a href="/login">Login</a>
    </div>
  </div>
</div>
@endsection
