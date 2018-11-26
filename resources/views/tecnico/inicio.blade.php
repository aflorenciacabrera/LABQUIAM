 
@extends('layouts.footer')
@section('content')


{{-- **************************************** MENU *********************************************** --}}
<div class="container">
            <div class="row justify-content-center">
                <nav>
                	<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab"  href="{{url('/inicio') }}" role="tab" aria-controls="nav-home" aria-selected="true">Inicio</a>
						<a class="nav-item nav-link" id="nav-profile-tab"  href="{{url('/perfil') }}" role="tab" aria-controls="nav-profile" aria-selected="false">Perfil</a>
						<a class="nav-item nav-link" id="nav-contact-tab"  href="{{url('/tecnico') }}" role="tab" aria-controls="nav-contact" aria-selected="false">Nuevo Técnico</a>
                        <a class="nav-item nav-link" id="nav-about-tab" href="{{url('/cliente') }}" role="tab" aria-controls="nav-about" aria-selected="false">Nuevo Cliente</a>
                        <a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Muestras</a>
                         <a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Historial</a>
					</div>
                </nav>      
            </div>
            </div>
@endsection
@extends('layouts.app')
