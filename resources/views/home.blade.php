@extends('layout')
@section('title', 'Browse Commissions')
@section('main')

<div class="container">

  <h1>Browse Commissions</h1>

  <!-- <div>
    Get some search critera available (Level 2)
  </div> -->
    <!-- LIST ALL OPEN COMMISSIONS -->
  <div class="row">
    @forelse ($commissions as $commission)
      @if(Auth::id() != $commission->artist_id)
      <div class="card shadow m-2" style="width: 18rem;">
        <img src="{{url('uploads/'.$commission->imagename)}}" class="card-img-top" alt="Dog placeholder">
        <div class="card-body">
          <h5 class="card-title">{{$commission->title}}</h5>
          <p class="card-text">{{$commission->description}}</p>
          <a href="commission/{{$commission->id}}" class="btn btn-primary">View</a>
        </div>
      </div> <!--card-->
      @endif
    @empty
    @endforelse

  </div> <!--row-->
</div>

@endsection
