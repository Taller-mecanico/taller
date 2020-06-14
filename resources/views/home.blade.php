@extends('layouts.app')


@section('content')

    
<section class="page_title" style="background: url(../assets/image/resources/breadcrumb2.jpg) !important;">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 d-flex">
                        <div class="content_box">
                          
                           <h1 style="
                           background: linear-gradient(to right, #30CFD0 0%, #cb42f5 100%);
                           -webkit-background-clip: text;
                           -webkit-text-fill-color: transparent;">Panel de control</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </section> <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					@if(Auth::user()->hasRole('admin'))
					
                    <div><h2><a href="jefe">IR AL PANEL DEL JEFE</a></h2></div>
					@elseif(Auth::user()->hasRole('user'))
                    <div><h1>Acceso como empleado</h1></div> <br>
                   
                    <div><h2><a href="tareas">TAREAS EMPLEADO</a></h2></div>
                   @elseif(Auth::user()->hasRole('cliente'))
                    <div> <h1>Acceso como cliente</h1></div> <br>
                    <div><h2><a href="tareas">Estado de su reparación</a></h2></div>
					@endif
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection

