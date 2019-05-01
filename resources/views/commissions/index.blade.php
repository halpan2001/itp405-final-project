@extends('layout')
@section('title', 'Commission')
@section('main')
<div class="container">
  <div class="card mb-3 shadow">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h3 class="card-title">{{$commission->title}}</h3>
          <p class="card-text"> {{$commission->description}}</p>
        </div>
        <div class="col">
          <div class="mb-4">
            <h5 class="card-text">Price: ${{$commission->price}} <span class="badge badge-success">Paid {{$commission->paid}}</span></h5>
          </div>
          <div class="mb-4">
            <h5 class="card-text">Artist</h5>
            <a href="/profile" class="card-text"> {{$artist->name}}</a>
          </div>
          <h5 class="card-text">Time to complete once purchased</h5>
          <p class="card-text"> {{$commission->workTime}} Days</p>
          @if (Auth::check())
            @if(Auth::id() == $commission->artist_id)
            @else
            <a href="/purchase/{{$commission->id}}/new" class="btn btn-primary">Commission</a>
            @endif
          @else
          <a href="/login" class="btn btn-primary">Login to Commission!</a>
          @endif
        </div> <!--col-->
      </div><!--row-->
    </div><!--card-body-->
    <img src="{{url('uploads/'.$commission->imagename)}}" class="card-img-bottom" alt="...">
  </div>
</div>

@endsection
