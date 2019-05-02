@extends('layout')
@section('title', 'About')
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
      Have 5 different routes using the following HTTP methods
      <ul>
        <li>
          2 GET endpoints (one endpoint for a collection of resources and another endpoint for a single resource)
        </li>
        <li>
          1 POST
        </li>
        <li>
          1 PATCH
        </li>
        <li>
          1 DELETE
        </li>
      </ul>
    </li>
    <li>
      Endpoints that have a response body should be JSON
    </li>
    <li>
      POST and PATCH requests should have validation. If validation fails, the response should return a 422 HTTP status code with the body containing the validation errors
    </li>
    <li>
    The GET request for a single resource and the DELETE request should respond with a 404 HTTP status code and an empty response body if the resource doesn’t exist.
    </li>
    <li>
      The DELETE request should not result in any orphaned records. An orphaned record is a record whose foreign key value references a non-existent primary key value.
    </li>
    <li>
      Use Sequelize for database access
    </li>
    <li>
      Use dotenv for sensitive data like API keys and credentials
    </li>
  </ol>


  <h3> Coming soon... </h3>
  <ol>
    <li>
      Multiple images per commission
    </li>
    <li>
      Add tags to commissions
    </li>
    <li>
      Better name
    </li>
    <li>
      Fix routing on the artist side (join tables)
    </li>
    <li>
      Refine preview boxes
    </li>
  </ol>
</div>

@endsection
