@extends('layout')
@section('title', 'Commission-em | About')
@section('main')

<div class="container">
  <h1> About </h1>

  <div>
    Hello! This is a poorly named site
  </div>
  <br />

  <h3> To Do </h3>
  <ol>
    <li>
      Make edit user info page
    </li>
    <li>
      Make validation on sign up, commission create and edit pages
    </li>
    <li>
      use the user_commission join table properly
    </li>
    <li>
      Make the view request page (start routing with {id})
    </li>
    <li>
      Refine preview boxes
    </li>
    <li>
      Add tags to commissions?
    </li>
    <li>
      Better name
    </li>
    <li>
      Migrations
      <ul>
        <li>
          Update user table to allow for images
        </li>
      </ul>
    </li>
  </ol>
</div>

@endsection
