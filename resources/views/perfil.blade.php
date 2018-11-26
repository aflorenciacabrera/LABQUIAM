

@extends('layouts.footer')
@extends('layouts.perfil')
@extends('layouts.app')
 @section('content')    
 {{-- **************************************** MENU *********************************************** --}}
 <div class="container">
     <div class="row justify-content-center">
        @if(Auth::user()->hasRole('admin'))
           		
        	<nav>
                	<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link " id="nav-home-tab"  href="{{url('/inicio') }}" role="tab" aria-controls="nav-home" aria-selected="false">Inicio</a>
						<a class="nav-item nav-link active" id="nav-profile-tab"  href="{{url('/perfil') }}" role="tab" aria-controls="nav-profile" aria-selected="false">Perfil</a>
						<a class="nav-item nav-link" id="nav-contact-tab"  href="{{url('/tecnico') }}" role="tab" aria-controls="nav-contact" aria-selected="false">Nuevo Técnico</a>
                        <a class="nav-item nav-link" id="nav-about-tab" href="{{url('/cliente') }}" role="tab" aria-controls="nav-about" aria-selected="false">Nuevo Cliente</a>
						<a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Muestras</a>
						 <a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Historial</a>
					</div>
                </nav>      
        @endif       
        @if(Auth::user()->hasRole('tecnico'))
          <nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link " id="nav-home-tab"  href="{{url('/inicio') }}" role="tab" aria-controls="nav-home" aria-selected="false">Inicio</a>
						<a class="nav-item nav-link active" id="nav-profile-tab"  href="{{url('/perfil') }}" role="tab" aria-controls="nav-profile" aria-selected="true">Perfil</a>
						<a class="nav-item nav-link" id="nav-contact-tab"  href="{{url('/tecnico') }}" role="tab" aria-controls="nav-contact" aria-selected="false">Nuevo Técnico</a>
                        <a class="nav-item nav-link" id="nav-about-tab" href="{{url('/cliente') }}" role="tab" aria-controls="nav-about" aria-selected="false">Nuevo Cliente</a>
						<a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Muestras</a>
						 <a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Historial</a>
					</div>
                </nav>
          

        @endif

        @if(Auth::user()->hasRole('cliente'))
            <nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link " id="nav-home-tab"  href="{{url('/inicio') }}" role="tab" aria-controls="nav-home" aria-selected="false">Inicio</a>
						<a class="nav-item nav-link active" id="nav-profile-tab"  href="{{url('/perfil') }}" role="tab" aria-controls="nav-profile" aria-selected="true">Perfil</a>
						<a class="nav-item nav-link" id="nav-contact-tab"  href="{{url('/tecnico') }}" role="tab" aria-controls="nav-contact" aria-selected="false">Nuevo Solicitud</a>
                        <a class="nav-item nav-link" id="nav-about-tab" href="{{url('/cliente') }}" role="tab" aria-controls="nav-about" aria-selected="false">Muestras</a>
                        <a class="nav-item nav-link" id="nav-about-tab"  href="{{url('/muestra') }}" role="tab" aria-controls="nav-about" aria-selected="false">Historial</a>
					</div>
                </nav>
        

        @endif

  </div>
</div>      

       

@endsection
