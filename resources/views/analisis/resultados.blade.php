@extends('layouts.footer')
@section('content')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
{{-- Alta de tecnico --}}
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4"> Resultados</h1>

                   
                </div>
 
                    <div class="card-body">
                        @csrf
                        
                            <div align="center">
                                 <a  rol="button" href="{{url('#')}}" class="btn btn-outline-info btn-sm " >  Informe </a>
                                <a  rol="button" href="{{url('#')}}" class="btn btn-outline-info btn-sm " > Nuevo</a>
                            </div>
                               
                           
                       

                      

                    <div class="card-footer text-muted d-flex justify-content-end">

                        <div class="col-sm-11 input-column">
                          <a href="{{ url('analisis/determinaciones') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-light active ">Atras</a>  </div>
                        {{-- <a class="btn btn-light mr-2" type="reset">Cancelar</a> --}}
                        <a class="btn active btn-info" href="{{ url('#') }}"   role ="button">Aceptar</a>
                    </div>
               
            </div>
        </div>
    </div>
</div>



     



@endsection
@extends('layouts.app')

