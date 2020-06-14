@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Usuarios</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Email</td>
          <td>Descripción usuario</td>
<!--          <td>Cargo</td>-->
          <td colspan = 2>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->descripcion_usuario}}</td>


            <td>
                <a href="{{ route('usuarios.edit',$user->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('usuarios.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
        
        <div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
            <div>
    <a style="margin: 19px;" href="{{ route('usuarios.create')}}" class="btn btn-primary">Nuevo Contacto</a>
    </div>  
    </tbody>
  </table>
<div>
</div>
@endsection