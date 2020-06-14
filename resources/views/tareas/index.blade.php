@extends('tareas')

@section('main')
<div class="row">
<div class="col-sm-12">
       
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID TAREA</td>
        @if(Auth::user()->hasRole('admin'))
          <td>EMPLEADO</td>
          <td>ID EMPLEADO</td>
        @endif
          <td>DESCRIPCION TAREA</td>
          <td>ESTADO TAREA</td>
        @if(!(Auth::user()->hasRole('cliente')))
          <td>ID CLIENTE</td>
        @endif
          <td>TITULO TAREA</td>
            <td>PRECIO</td>
            @if(!(Auth::user()->hasRole('cliente')))
            
          <td colspan = 2>ACCIONES</td>
            @endif
        </tr>
    </thead>
	  <div>
    @if(Auth::user()->hasRole('admin'))
      <a style="margin: 19px;" href="{{ route('tareas.create')}}" class="btn btn-primary">Nueva tarea</a>

     @endif

    </div>  
    <tbody>
        @foreach($tareas as $tarea)
        <tr>
            @if(Auth::user()->hasRole('cliente'))
            @if($tarea->id_cliente==Auth::id())
            <td>{{$tarea->id}}</td>
            <td>{{$tarea->descripcion_tarea}}</td>
            <td>{{$tarea->estado_tarea}}</td>
            <td>{{$tarea->titulo_tarea}}</td>
            <td>{{$tarea->precio}}</td>
            @endif
            @elseif(Auth::user()->hasRole('user'))
            @if($tarea->id_empleado==Auth::id())
            <td>{{$tarea->id}}</td>
            <td>{{$tarea->descripcion_tarea}}</td>
            <td>{{$tarea->estado_tarea}}</td>
            <td>{{$tarea->id_cliente}}</td>
            <td>{{$tarea->titulo_tarea}}</td>
            <td>{{$tarea->precio}}</td>
                        
            <td>
                <a href="{{ route('tareas.edit',$tarea->id)}}" class="btn btn-primary">Editar</a>

            </td>
            @endif
            @else
            <td>{{$tarea->id}}</td>
            @foreach($users as $user)
            @if($user->id==$tarea->id_empleado)
            <td>{{$user->name}}</td>
            @endif
            @endforeach
            <td>{{$tarea->id_empleado}}</td>
            <td>{{$tarea->descripcion_tarea}}</td>
            <td>{{$tarea->estado_tarea}}</td>
            <td>{{$tarea->id_cliente}}</td>
            <td>{{$tarea->titulo_tarea}}</td>
            <td>{{$tarea->precio}}</td>
            
            <td>
                <a href="{{ route('tareas.edit',$tarea->id)}}" class="btn btn-primary">Editar</a>
            </td>
            @endif
            <td>
                @if(Auth::user()->hasRole('admin'))
                <form action="{{ route('tareas.destroy', $tarea->id)}}" method="post">

                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>

                    
                </form>
              
            </td>
            <td>
             <a href="{{action('tareasController@imprimir',$tarea->id) }}" class="btn btn-primary">Imprimir</a>
            </td>
              @endif
        </tr>
        @endforeach
		
		<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
		
    </tbody>
  </table>
<div>
</div>
@endsection