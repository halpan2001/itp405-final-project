@extends('layout')
@section('title', 'Commission-em | Open Commissions')
@section('main')

<div class="container">

  <h1>Browse Commissions</h1>

  <!-- <div>
    Get some search critera available (Level 2)
  </div> -->
    <!-- LIST ALL OPEN COMMISSIONS -->
  <div class="row">
    @forelse ($commissions as $commission)
    <!-- TEST ALL THE CARDS -->
    <div class="card shadow m-2" style="width: 18rem;">
      <img src="http://www.sheprescue.org/images/Maximilian%20von%20Marl7.JPG" class="card-img-top" alt="Dog placeholder">
      <div class="card-body">
        <h5 class="card-title">{{$commission->title}}</h5>
        <p class="card-text">{{$commission->description}}</p>
        <a href="#" class="btn btn-primary">View</a>
      </div>
    </div> <!--card-->
    @empty
    @endforelse

  </div> <!--row-->
</div>

@endsection
