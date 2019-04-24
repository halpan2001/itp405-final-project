@extends('layout')
@section('title', 'Commission-em | View Comission')
@section('main')
<div class="container">
  <div class="card mb-3 shadow">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h3 class="card-title">Comission Title</h3>
          <h5 class="card-text">Description</h5>
          <p class="card-text"> This is a neato burrito hand drawn watercolor headshot. Might get kinda long</p>
        </div>
        <div class="col">
          <div class="mb-4">
            <h5 class="card-text">Price: $15 <span class="badge badge-success">Paid</span></h5>
          </div>
          <div class="mb-4">
            <h5 class="card-text">Artist</h5>
            <a href="/profile" class="card-text"> Person Name</a>
          </div>
          <h5 class="card-text">Date to be completed/Time to complete once purchased</h5>
          <p class="card-text"> 05/20/2019 --or-- 8 Days</p>
        </div>
      </div><!--row-->
    </div><!--card-body-->
    <img src="http://www.sheprescue.org/images/Maximilian%20von%20Marl7.JPG" class="card-img-bottom" alt="...">
  </div>
</div>

@endsection
