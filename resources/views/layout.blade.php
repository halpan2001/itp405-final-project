<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body >
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="/">Commission-em</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Commissions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="/profile" tabindex="-1">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout" tabindex="-1">Logout</a>
          </li>
        @else
        <li class="nav-item">
          <a class="nav-link text-primary" href="/signup" tabindex="-1">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="/login" tabindex="-1">Login</a>
        </li>
        @endif
      </ul>

    </div>
  </nav>


  <div class="contianer p-4">
    @yield('main')

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
