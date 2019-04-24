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
          Comssions Table
        </li>
        <li>
          Image table
        </li>
        <li>
          Comission - Join commission and user
        </li>
        <li>
          Purchase - Join commission and user
        </li>
        <li>
          Join commission and image
        </li>
      </ul>
    </li>
    <li>
      Make possible for artist to view and edit multiple comissions
    </li>
    <li>
      Badges "tags" for comissions
    </li>
  </ol>
</div>

@endsection
