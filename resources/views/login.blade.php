@extends('layout')
@section('title', 'Login')
@section('main')


    <div class="row justify-content-md-center">
      <div class="text-center shadow p-3 mb-5 bg-white rounded w-50 p-5" >
        <h2>Login</h2>
        <form class="text-left" method="post">
          <div class="form-group">
            @csrf
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <a href="/signup">Forgot Password?</a>
          </div>
          <input type="submit" class="btn btn-primary" value="Login"></input>
        </form>
        <div class="text-left">
          New to Commission-em? <a href="/signup">Sign Up</a>
        </div>
      </div>
    </div><!--close colum -->

@endsection
