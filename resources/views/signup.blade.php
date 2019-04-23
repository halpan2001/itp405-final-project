@extends('layout')
@section('title', 'Commission-em | Sign Up')
@section('main')
<div class="row justify-content-md-center">
  <div class="text-center shadow p-3 mb-5 bg-white rounded w-50 p-5" >
    <h2>Sign Up</h2>
    <form class="text-left">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    <div class="text-left">
      Been here before? <a href="/login">Login</a>
    </div>
  </div>
</div>
@endsection
