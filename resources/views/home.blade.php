@extends('layout')
@section('title', 'Commission-em | Open Comissions')
@section('main')

<div class="container">

  <h1>Browse Commissions</h1>

  <!-- <div>
    Get some search critera available (Level 2)
  </div> -->
    <!-- LIST ALL OPEN COMMISSIONS -->
  <div class="row">
    <!-- Loop the DB here -->
    <!-- TEST ALL THE CARDS -->
    <div class="card shadow m-2" style="width: 18rem;">
      <img src="http://www.sheprescue.org/images/Maximilian%20von%20Marl7.JPG" class="card-img-top" alt="Dog placeholder">
      <div class="card-body">
        <h5 class="card-title">Comission Title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">View</a>
      </div>
    </div> <!--card-->
    <!-- Loop the DB here -->
    
  </div> <!--row-->
</div>

@endsection
