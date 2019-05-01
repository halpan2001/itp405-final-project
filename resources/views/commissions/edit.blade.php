@extends('layout')
@section('title', 'Commission-em | Edit Comissions')
@section('main')

<div class="container">
  <div class="text-center shadow p-3 mb-5 bg-white rounded p-5" >
    <h2>Edit Comission</h2>
    <form class="text-left" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="title">Title of Your Comission</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" value="{{$commission->title}}">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"> {{$commission->description}}</textarea>
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{$commission->price}}"></input>
      </div>

      <div class="form-group">
        <label for="slots">Slots</label>
        <input type="text" class="form-control" id="slots" name="slots" value="{{$commission->slots}}"></input>
      </div>

      <div class="form-group">
        <label for="image">Image</label><br />
        <small>Previous image you uploaded, delete?</small>
        <image class="img-thumbnail" src="{{url('uploads/'.$commission->imagename)}}"></image>
        <input type="file" class="form-control" id="image" name="image"></input>
      </div>

      <input type="submit" class="btn btn-primary" value="Update Comission"></input>
    </form>
    <br />
    <form class="text-left" action="/commission/{{$commission->id}}/delete" method="post">
      @csrf
      @method('DELETE')
      <input type="submit" class="btn btn-danger" value="Delete Commission"></input>
    </form>
  </div>
</div><!--container -->

@endsection
