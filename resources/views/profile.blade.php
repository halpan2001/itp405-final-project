@extends('layout')
@section('title', 'Commission-em | Open Comissions')
@section('main')


<div class="container">
  <div class="row">
    <div class="col col-lg-3" >
      <img style="height: 200px" class="img-thumbnail" src="http://www.personalbrandingblog.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"/>
      <h2> Person Name </h2>
      <p>Email: email@email.com </p>
      <a href="#" class="btn btn-primary">Edit</a>
    </div>

    <div class="col" >
      <!-- COMISSIONS -->
      <div class="shadow p-3 mb-5 bg-white rounded">
        <h3>Your Comissions</h3>
        <a class="btn btn-primary" href="/create">Make New Commission</a>
         <br /> <br />

        <div class="card shadow-sm" style="width: 18rem;">
          <img src="http://www.sheprescue.org/images/Maximilian%20von%20Marl7.JPG" class="card-img-top" alt="Dog placeholder">
          <div class="card-body">
            <h5 class="card-title">Comission Title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Edit</a>  <a href="#" class="btn btn-primary">View</a>
          </div>
        </div> <!--card-->

      </div>

      <!-- REQUEST -->
      <div class="shadow p-3 mb-5 bg-white rounded">
        <h3>Your Requests</h3>

          <div class="card shadow-sm" style="width: 18rem;">
            <img src="http://www.sheprescue.org/images/archie%20von%20arnis4.JPG" class="card-img-top" alt="Dog placeholder">
            <div class="card-body">
              <h5 class="card-title">Request Title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div> <!--card-->
      </div>

    </div><!--col-->

  </div> <!--row-->
</div><!--container-->

@endsection