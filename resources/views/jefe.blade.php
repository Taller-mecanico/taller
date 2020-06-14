@extends('layouts.app')


        @if(Auth::user()->hasRole('admin'))
<!--         <div>Esto es para el jefe</div>-->
@section('content')
<section class="page_title" style="background: url(../assets/image/resources/breadcrumb2.jpg) !important;">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 d-flex">
                        <div class="content_box">
                          
                           <h1 style="
                           background: linear-gradient(to right, #30CFD0 0%, #cb42f5 100%);
                           -webkit-background-clip: text;
                           -webkit-text-fill-color: transparent;">Panel de Administrador</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <br>
        <div><h2><a href="tareas">IR A tareas</a></h2></div><a href=""></a> <br>
                <div><h2><a href="usuarios">IR A GESTIÓN DE USUARIOS</a></h2></div><a href=""></a>
        @else
            return redirect()->route('home');
        @endif

        
        @endsection
