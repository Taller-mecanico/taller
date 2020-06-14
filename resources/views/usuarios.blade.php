@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Usuarios</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
        @if(Auth::user()->hasRole('admin'))


  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  @else
    <p>No está autorizado para la gestión de usuarios</p>
    <div><a href="home">VOLVER A INICIO</a></div>
  @endif
</body>
</html>