@extends('layouts.footer')
@section('content')

{{-- Alta de tecnico --}}
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4"> Técnicas para Análisis </h1>

                    {{-- <div class="dropdown">
                        <a class="btn btn-white dropdown-toggle"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            Tipo de Análisis
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/analisis/agua/potable">Agua potable</a>
                            <a class="dropdown-item" href="/analisis/agua/estancada">Agua Estancada</a>
                           
                        </div>
                    </div> --}}
                </div>

                    <div class="card-body">
                        @csrf

                        <nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Agua potable</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Agua Estancada</a>
						{{-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a> --}}
					</div>
                </nav>
                
                	<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        Texto
                        <br>
                       
                        <a class="btn btn-primary" href="{{ url('analisis/agua/potable') }}"   role ="button">Agua potable</a>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        Texto
                        <br>
                        <a class="btn btn-primary" href="{{ url('analisis/agua/estancada') }}"   role ="button">Agua Estancada</a>
                       
					</div>
					{{-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						
					</div>
					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
					
					</div> --}}
				</div>
                        <div class="form-group row">
                            <div class="col-6">
                               
                            </div>
                            <div class="col-6">
                               
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                        </div> --}}

                        <div class="form-group row">
                            <div class="col-12">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-check form-check-inline">
                                   
                                </div>

                                <div class="form-check form-check-inline">
                                   
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-muted d-flex justify-content-end">

                        <div class="col-sm-11 input-column">
                          <a href="{{ url('muestra/lista') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-light active ">Cancelar</a>  </div>
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                        {{-- <button class="btn btn-primary" type="submit">Aceptar</button> --}}
                    </div>
               
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')