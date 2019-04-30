@extends('layout')
@section('title', 'Commission-em | Create Comissions')
@section('main')

<div class="container">
  <div class="text-center shadow p-3 mb-5 bg-white rounded p-5" >
    <h2>Create Commission</h2>
    <form class="text-left" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Title of Your Commission</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Make it short and sweet">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Describe what you have to offer!"></textarea>
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Set your price"></input>
      </div>

      <div class="form-group">
        <label for="workTime">Days to Complete</label>
        <input type="text" class="form-control" id="workTime" name="workTime" placeholder="How many days will it take for you to complete the commission once purchased?"></input>
      </div>

      <div class="form-group">
        <label for="slots">Slots</label>
        <input type="text" class="form-control" id="slots" name="slots" placeholder="How many comissions of this kind will you take?"></input>
      </div>

      <div class="form-group">
        <label for="image">Image</label><br />
        <small>Upload an example of what you will draw!</small>
        <input type="file" class="form-control" id="image" name="image"></input>
      </div>

      <input type="submit" class="btn btn-primary" value="Create Commission!"></input>
    </form>
  </div>
</div><!--container -->

@endsection
