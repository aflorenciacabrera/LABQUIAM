@extends('layouts.footer')
@extends('layouts.app')
@section('content')
{{-- Alta de tecnico --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">
                 <h4>{{ __('Alta de Técnico') }}</h4></div>
                {{-- *************************************************************************************** --}}
                <div class="card-body">
                        <form method="POST" action="{{url('producto/agregar')}}">
                        @csrf

                        {{-- ******************************************************************************--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label "> Título</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="titulo" value="" required autofocus>
                            </div>
                           
                        </div>
                       
                       
                        {{--******************************************************************************--}}
                         <div class="form-group row">
                            
                         </di>
                        {{-- ******************************** footer panel **************************************- --}}
                        
                        <div class="card-footer col-md-12">                           
                            <div class="form-group row">
                                <div class="col-sm-10 label-column">  
                                    <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
                                </div>      
                                <div class="col-sm-0 input-column">     
                                    <a href="{{ url('admin/inicio') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">Cancelar</a>
                                </div>  
                             </div> 
                         </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection