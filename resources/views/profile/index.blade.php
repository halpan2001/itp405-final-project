@extends('layout')
@section('title', 'Commission-em | Profile')
@section('main')


<div class="container">
  <div class="row">
    <div class="col col-lg-3" >
      <img style="height: 200px" class="img-thumbnail" src="{{url('uploads/'.$user->profile_photo)}}"/>
      <h2> {{$user->name}} </h2>
      <p>Email: {{$user->email}} </p>
      <a href="/profile/edit" class="btn btn-primary">Edit</a>
    </div>

    <div class="col" >
      <!-- COMISSIONS -->
      <div class="shadow p-3 mb-5 bg-white rounded">
        <h3>Your Commissions</h3>
        <a class="btn btn-primary" href="/commission/create">Make New Commission</a>
         <br /> <br />

         @forelse ($commissions as $commission)
        <div class="card shadow-sm" style="width: 18rem;">
          <img src="{{url('uploads/'.$commission->imagename)}}" class="card-img-top" alt="Dog placeholder">
          <div class="card-body">
            <h5 class="card-title">{{$commission->title}}</h5>
            <p class="card-text">{{$commission->description}}</p>
            <a href="/commission/{{$commission->id}}/edit" class="btn btn-primary">Edit</a>  <a href="/commission/{{$commission->id}}" class="btn btn-primary">View</a>
          </div>
        </div> <!--card-->
        @empty
        <div>
        </div>
        @endforelse

      </div>

      <!-- REQUEST -->
      <div class="shadow p-3 mb-5 bg-white rounded">
        <h3>Your Purchases</h3>
        @forelse ($purchases as $purchase)
          <div class="card shadow-sm" style="width: 18rem;">
            <img src="{{url('uploads/'.$purchase->imagename)}}" class="card-img-top" alt="Dog placeholder">
            <div class="card-body">
              <h5 class="card-title">{{$purchase->title}}</h5>
              <p class="card-text">{{$purchase->notes}}</p>
              <a href="/purchase/{{$purchase->post_id}}" class="btn btn-primary">View</a>
            </div>
          </div> <!--card-->
          @empty
          @endforelse
      </div>

    </div><!--col-->

  </div> <!--row-->
</div><!--container-->

@endsection
