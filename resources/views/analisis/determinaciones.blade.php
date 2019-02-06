 
 @extends('layouts.footer')
@section('content')

 <div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4"> Determinaciones </h1>

                    
                </div>

                    <div class="card-body">
                        @csrf
                     
                        <nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Alcalinidad</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Cloruros</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Fosfatos</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">hierro</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						 <div align="center">
                                 <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Planilla </a>
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Nueva </a>
                            </div>

					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						 <div align="center">
                                 <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Planilla </a>
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Nueva </a>
                            </div>
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						 <div align="center">
                                 <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Planilla </a>
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " > <i class="fa fa-plus"></i> Nueva </a>
                            </div>
					</div>
					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
					 <div align="center">
                                 <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >Planilla </a>
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-primary btn-sm " >Nueva </a>
                            </div>
					</div>
				</div>
                    </div>

                    <div class="card-footer text-muted d-flex justify-content-end">

                        <div class="col-sm-11 input-column">
                          <a href="{{ url('analisis/tecnica') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-light active ">Cancelar</a>  </div>
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                         {{-- <button class="btn btn-primary" type="submit">Aceptar</button>  --}}
                          <a class="btn btn-primary" href="{{ url('analisis/resultados') }}"   role ="button">Siguiente</a>
                    </div>
               
            </div>
        </div>
    </div>
</div>
 

@endsection
@extends('layouts.app')