<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{  asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{  asset('css/kovil.css') }}"> 
    @stack('styles')

  </head>
  <body>
    
    <!-- Header Section -->
    <header>@include('shared.navbar')</header>

    <!-- Side Panel Section -->
    <aside>@include('shared.sidebar')</aside>

    <!-- Main Section -->
    <main>@yield('content')</main>

    <!-- Footer Section -->
    <footer></footer>
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{  asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="{{ asset('js/kovil.js') }}"></script>
    @stack('scripts')
  </body>
</html>