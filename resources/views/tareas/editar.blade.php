<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
<meta charset="utf-8">
<meta name="title" content="Corona">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="Corona" />
      <meta property="og:url" content="http://steelthemes.com/demo/Elango/Corona-final" />
      <meta property="og:title" content="Corona">
      <meta property="og:image" content="http://steelthemes.com/demo/Elango/Corona-final/assets/image/fbimg-210x210.jpg">
      <meta property="og:description" content="Corona is html 5 Template">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#269bef ">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      
      <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../../assets/fonts/font/flaticon.css">
      
     
</head>
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar la tarea</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('tareas.update', $tareas->id) }}">
            @method('PATCH') 
            @csrf
            @if(Auth::user()->hasRole('admin'))
            <div class="form-group">
                <label for="id_empleado">ID_EMPLEADO:</label>
                <input type="text" class="form-control" name="id_empleado" value={{ $tareas->id_empleado }} / readonly>
            </div>

            <div class="form-group">
                <label for="descripcion_tarea">descripcion_tarea:</label>
                <input type="text" class="form-control" name="descripcion_tarea" value={{ $tareas->descripcion_tarea }} />
            </div>

            <div class="form-group">
                <label for="estado_tarea">estado_tarea:</label>
                <input type="text" class="form-control" name="estado_tarea" value={{ $tareas->estado_tarea }} />
            </div>
            <div class="form-group">
                <label for="id_cliente">id_cliente:</label>
                <input type="text" class="form-control" name="id_cliente" value={{ $tareas->id_cliente }} />
            </div>
                        <div class="form-group">
                <label for="precio">precio:</label>
                <input type="text" class="form-control" name="precio" value={{ $tareas->precio }} />
            </div>
            <div class="form-group">
                <label for="titulo_tarea">titulo:</label>
                <input type="text" class="form-control" name="titulo_tarea" value={{ $tareas->titulo_tarea }} />
            </div>
           @elseif(Auth::user()->hasRole('user'))
            <div class="form-group">
                <label for="id_empleado">ID_EMPLEADO:</label>
                <input type="text" class="form-control" name="id_empleado" value={{ $tareas->id_empleado }} readonly />
            </div>

            <div class="form-group">
                <label for="descripcion_tarea">descripcion_tarea:</label>
                <input type="text" class="form-control" name="descripcion_tarea" value={{ $tareas->descripcion_tarea }} readonly/>
            </div>

            <div class="form-group">
                <label for="estado_tarea">estado_tarea:</label>
                <input type="text" class="form-control" name="estado_tarea" value={{ $tareas->estado_tarea }} />
            </div>
            <div class="form-group">
                <label for="id_cliente">id_cliente:</label>
                <input type="text" class="form-control" name="id_cliente" value={{ $tareas->id_cliente }} readonly/>
            </div>
            <div class="form-group">
                <label for="titulo_tarea">titulo:</label>
                <input type="text" class="form-control" name="titulo_tarea" value={{ $tareas->titulo_tarea }} readonly/>
            </div>
            
                        <div class="form-group">
                <label for="precio">precio:</label>
                <input type="text" class="form-control" name="precio" value={{ $tareas->precio }} / readonly>
            </div>
           @else
                <div class="form-group">
                <label for="id_empleado">ID_EMPLEADO:</label>
                <input type="text" class="form-control" name="id_empleado" value={{ $tareas->id_empleado }} readonly />
            </div>

            <div class="form-group">
                <label for="descripcion_tarea">descripcion_tarea:</label>
                <input type="text" class="form-control" name="descripcion_tarea" value={{ $tareas->descripcion_tarea }} readonly/>
            </div>

            <div class="form-group">
                <label for="estado_tarea">estado_tarea:</label>
                <input type="text" class="form-control" name="estado_tarea" value={{ $tareas->estado_tarea }} readonly/>
            </div>
            <div class="form-group">
                <label for="id_cliente">id_cliente:</label>
                <input type="text" class="form-control" name="id_cliente" value={{ $tareas->id_cliente }} readonly/>
            </div>
            <div class="form-group">
                <label for="titulo_tarea">titulo:</label>
                <input type="text" class="form-control" name="titulo_tarea" value={{ $tareas->titulo_tarea }} readonly/>
            </div>
                        <div class="form-group">
                <label for="precio">precio:</label>
                <input type="text" class="form-control" name="precio" value={{ $tareas->precio }} / readonly>
            </div>
            
           @endif
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
<script src="../../assets/js/jquery.js "></script>
      <script src="../../assets/js/popper.min.js "></script>
      <script src="../../assets/js/bootstrap.min.js "></script>
      <script src="../../assets/js/bsnav.min.js "></script>
      <script src="../../assets/js/jquery-ui.js "></script>
      <script src="../../assets/js/isotope.min.js "></script>
      <script src="../../assets/js/wow.js "></script>
      <script src="../../assets/js/owl.js "></script>
      <script src="../../assets/js/jquery.fancybox.js "></script>
      <script src="../../assets/js/TweenMax.min.js "></script>
      <script src="../../assets/js/validator.min.js "></script>
      <script src="../../assets/js/appear.js "></script>
      <script src="../../assets/js/moment.js "></script>
      <script src="../../assets/js/jquery.flexslider-min.js"></script>
      <script src="../../assets/js/pagenav.js"></script>
      <script src="../../assets/js/custom.js "></script>
</body>
