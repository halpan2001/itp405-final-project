@extends('layout')
@section('title', 'Commission-em | Create Comissions')
@section('main')

<div class="container">
  <div class="text-center shadow p-3 mb-5 bg-white rounded p-5" >
    <h2>Create Commission</h2>
    <form class="text-left" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">Title of Your Commission</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp"
        placeholder="Make it short and sweet" value="{{ old('title') != null ? old('title'): ''}}">
        <small id="title" class="form-text text-danger">{{$errors->first('title')}}</small>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Describe what you have to offer!">{{ old('description') != null ? old('description'): ''}}</textarea>
        <small id="description" class="form-text text-danger">{{$errors->first('description')}}</small>
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price"
        placeholder="Set your price" value="{{ old('price') != null ? old('price'): ''}}">
        <small id="price" class="form-text text-danger">{{$errors->first('price')}}</small>
      </div>

      <div class="form-group">
        <label for="workTime">Days to Complete</label>
        <input type="text" class="form-control" id="workTime" name="workTime"
        placeholder="How many days will it take for you to complete the commission once purchased?"
        value="{{ old('workTime') != null ? old('workTime'): ''}}">
        <small id="price" class="form-text text-danger">{{$errors->first('workTime')}}</small>
      </div>

      <div class="form-group">
        <label for="slots">Slots</label>
        <input type="text" class="form-control" id="slots" name="slots"
        placeholder="How many comissions of this kind will you take?"
        value="{{ old('slots') != null ? old('slots'): ''}}"></input>
        <small id="slots" class="form-text text-danger">{{$errors->first('slots')}}</small>
      </div>

      <div class="form-group">
        <label for="image">Image</label><br />
        <small>Upload an example of what you will draw!</small>
        <input type="file" class="form-control" id="image" name="image"></input>
        <small id="image" class="form-text text-danger">{{$errors->first('image')}}</small>
      </div>

      <input type="submit" class="btn btn-primary" value="Create Commission!"></input>
    </form>
  </div>
</div><!--container -->

@endsection
