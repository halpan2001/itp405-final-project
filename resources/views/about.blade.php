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
      use the user_commission join table properly
    </li>
    <li>
      Image table and image storage - DO THE FOLDER STORAGE
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
          Image table
        </li>
        <li>
          Join commission and image
        </li>
      </ul>
    </li>
  </ol>
</div>

@endsection
