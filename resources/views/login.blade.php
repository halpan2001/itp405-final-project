@extends('layout')
@section('title', 'Commission-em | Login')
@section('main')


    <div class="row justify-content-md-center">
      <div class="text-center shadow p-3 mb-5 bg-white rounded w-50 p-5" >
        <h2>Login</h2>
        <form class="text-left">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <a href="/signup">Forgot Password?</a>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="text-left">
          New to Commission-em? <a href="/signup">Sign Up</a>
        </div>
      </div>
    </div><!--close colum -->

@endsection
