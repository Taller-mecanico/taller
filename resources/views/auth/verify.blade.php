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
                           -webkit-text-fill-color: transparent;">{{ __('Verific su dirección de correo') }}</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un correo de verificación a su correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, revise su correo de verificación.') }}
                    {{ __('Si no recibe el correo de verificación.') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Pulse aquí para que le enviemos otro.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
