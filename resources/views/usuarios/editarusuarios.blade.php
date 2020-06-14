@extends('usuarios') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar un contacto</h1>

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
        <form method="post" action="{{ route('usuarios.update', $users->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" value={{ $users->name }} />
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="text" class="form-control" name="email" value={{ $users->email }} />
            </div>
            <div class="form-group">
              <label for="descripcion_usuario">Descripción Usuario:</label>
              <input type="text" class="form-control" name="descripcion_usuario"/>
          </div>
          <div class="form-group">
              <label for="password">Contraseña:</label>
              <input type="password" class="form-control" name="password"/>
          </div>

   
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection