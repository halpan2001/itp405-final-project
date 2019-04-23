@extends('layout')
@section('title', 'Commission-em | Create Comissions')
@section('main')

<div class="container">
  <div class="text-center shadow p-3 mb-5 bg-white rounded p-5" >
    <h2>Create Comission</h2>
    <form class="text-left">

      <div class="form-group">
        <label for="InputTitle">Title of Your Comission</label>
        <input type="text" class="form-control" id="InputTitle" aria-describedby="titleHelp" placeholder="Make it short and sweet">
      </div>

      <div class="form-group">
        <label for="InputDescription">Description</label>
        <textarea class="form-control" id="InputDescription" rows="3" placeholder="Describe what you have to offer!"></textarea>
      </div>

      <div class="form-group">
        <label for="InputCost">Cost</label>
        <input type="text" class="form-control" id="InputCost"  placeholder="Set your price (Must be numeric)"></input>
      </div>

      <div class="form-group">
        <label for="InputSlot">Slots</label>
        <input type="text" class="form-control" id="InputSlot"  placeholder="How many comissions of this kind will you take? (Numeric)"></input>
      </div>

      <div class="form-group">
        <label for="InputImage">Image</label><br />
        <small>Upload an example of what you will draw!</small>
        <input type="file" class="form-control" id="InputImage"></input>
      </div>

      <button type="submit" class="btn btn-primary">Create Comission!</button>
    </form>
  </div>
</div><!--container -->

@endsection
