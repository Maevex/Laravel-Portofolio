@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Porto - Arifin Ilham</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body>
    <div id="colorlib-main">
      <div class="hero-wrap js-fullheight" style="background-image: url(/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="js-fullheight d-flex justify-content-center align-items-center">
          <div class="col-md-8 text text-center">
            <div class="desc">
              <h1 class="mb-4">{{ $project->title }}</h1>
              <p class="mb-4">{{ $project->category }}</p>
              <p class="mb-0"><strong>Overview:</strong></p>
                <p class="text-muted">{{ $project->overview }}</p>

            </div>
          </div>
        </div>
      </div>

      <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Description</h2>
                <p>This is the project description.</p>
                <p class="lead text-muted text-justify mx-auto" style="max-width: 700px;">{{ $project->description }}</p>


                <div class="mt-4">
          <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to Projects</a>
          <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </div>
            </div>
        </div>
      </section>
    </div>

    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
      </svg>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
