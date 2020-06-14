@extends('usuarios')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Añadir Usuario</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('usuarios.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name"> Nombre:</label>
              <input type="text" class="form-control" name="name"/>
          </div>


          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          
          <div class="form-group">
              <label for="descripcion_usuario">Descripción Usuario:</label>
              <input type="text" class="form-control" name="descripcion_usuario"/>
          </div>
          <div class="form-group">
              <label for="password">Contraseña:</label>
              <input type="password" class="form-control" name="password"/>
          </div>
            <div class="form-group">
              <p> Seleccione el tipo de usuario:</p>
              <input type="radio" id="jefe" name="rol" value="1"/>
                <label for="jefe">1-Jefe</label><br>
              <input type="radio" id="empleado" name="rol" value="2"/>
                <label for="jefe">2-Empleado</label><br>
              <input type="radio" id="cliente" name="rol" value="3"/>
                <label for="jefe">3-Cliente</label><br>
          </div>
        
                              
          <button type="submit" class="btn btn-primary-outline">Añadir</button>
      </form>
  </div>
</div>
</div>
@endsection

    
