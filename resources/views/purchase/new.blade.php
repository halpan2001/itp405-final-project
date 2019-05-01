@extends('layout')
@section('title', 'Purchase')
@section('main')

<div class="row justify-content-md-center">

  <div class="card mb-3 shadow">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h3 class="card-title">Commission <span class="text-info">{{$commission->title}} </span>from <span class="text-info">{{$artist->name}}</span></h3>
          <p class="card-text"> {{$commission->description}}</p>
          <br />
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-4">
            <h5 class="card-text">Price: ${{$commission->price}} <span class="badge badge-danger">Paid {{$commission->paid}}</span></h5>
          </div>
          <h5 class="card-text">Time to complete once purchased</h5>
          <p class="card-text"> {{$commission->workTime}} Days</p>
        </div> <!--col-->
      </div><!--row-->
      <br />
      <form class="text-left" method="post">
        @csrf
        <div class="form-group">
          <h5 for="notes">Notes</h5>
          <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Describe what you would like in your commission!">{{ old('notes') != null ? old('notes'): ''}}</textarea>
          <small id="notes" class="form-text text-danger">{{$errors->first('notes')}}</small>
        </div>
        <input type="submit" class="btn btn-primary" value="Purchase"></input>
      </form>
    </div><!--card-body-->
    <img src="{{url('uploads/'.$commission->imagename)}}" class="card-img-bottom" alt="...">
  </div>
</div><!--close colum -->

@endsection
