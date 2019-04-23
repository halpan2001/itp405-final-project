@extends('layout')
@section('title', 'Commission-em | Edit Comissions')
@section('main')

<div class="container">
  <div class="text-center shadow p-3 mb-5 bg-white rounded p-5" >
    <h2>Edit Comission</h2>
    <form class="text-left">

      <div class="form-group">
        <label for="InputTitle">Title of Your Comission</label>
        <input type="text" class="form-control" id="InputTitle" aria-describedby="titleHelp" placeholder="Previous Title">
      </div>

      <div class="form-group">
        <label for="InputDescription">Description</label>
        <textarea class="form-control" id="InputDescription" rows="3" placeholder="Previous Description"></textarea>
      </div>

      <div class="form-group">
        <label for="InputCost">Cost</label>
        <input type="text" class="form-control" id="InputCost"  placeholder="Previous Price"></input>
      </div>

      <div class="form-group">
        <label for="InputSlot">Slots</label>
        <input type="text" class="form-control" id="InputSlot"  placeholder="Previous slots (cannot be fewer than accepted)"></input>
      </div>

      <div class="form-group">
        <label for="InputImage">Image</label><br />
        <small>Previous image you uploaded, delete?</small>
        <image src="http://www.sheprescue.org/images/Maximilian%20von%20Marl7.JPG"></image>
        <input type="file" class="form-control" id="InputImage"></input>
      </div>

      <button type="submit" class="btn btn-primary">Update Comission</button>
    </form>
  </div>
</div><!--container -->

@endsection
