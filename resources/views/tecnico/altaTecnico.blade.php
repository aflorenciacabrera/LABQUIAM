@extends('layouts.footer')
@section('content')

{{-- Alta de tecnico --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- Titulo --}}
                <div class="card-header text-center"><h3>{{ __('Alta de Técnico') }}</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{url('tecnico/nuevo')}}">
                        @csrf
                    
                        <div class="form-group row">
                            {{-- Ingreso de usuario --}}
                            <div class="col-6">
                                 <label for="name" >{{ __('Usuario') }} (*)</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                              {{-- Ingreso de Correo Electrónico --}}
                            <div class="col-6">
                                <label for="email" >{{ __('Correo electrónico') }} (*)</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            {{-- Ingreso Nombre y Apellido --}}
                            <div class="col-6">
                                <label for="nomyape" >{{ __('Nombre y Apellido') }}</label>
                                <input id="nomyape" type="text" class="form-control{{ $errors->has('nomyape') ? ' is-invalid' : '' }}" name="nomyape" value="{{ old('nomyape') }}" required autofocus placeholder="">
                                @if ($errors->has('nomyape'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nomyape') }}</strong>
                                    </span>
                                @endif
                            </div>
                              {{-- Ingreso Lugar de Trabajo --}}
                            <div class="col-6">
                                <label for="lugar" >{{ __('Lugar de trabajo') }}</label>
                                <input id="lugar" type="text" class="form-control{{ $errors->has('lugar') ? ' is-invalid' : '' }}" name="lugar" value="{{ old('lugar') }}" required autofocus placeholder="">
                                @if ($errors->has('lugar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lugar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                             {{-- Ingreso Trabajo que desempeña --}}
                            <div class="col-6">
                                <label for="trabajo" >{{ __('Actividad que desempeña') }}</label>
                                <input id="trabajo" type="text" class="form-control{{ $errors->has('trabajo') ? ' is-invalid' : '' }}" name="trabajo" value="{{ old('trabajo') }}" required autofocus placeholder="">
                                @if ($errors->has('trabajo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('trabajo') }}</strong>
                                    </span>
                                @endif
                            </div>
                              {{-- Ingreso Observación --}}
                            <div class="col-6">
                                <label for="observacion" >{{ __('Observaciones') }}</label>
                                <input id="observacion" type="text" class="form-control{{ $errors->has('observacion') ? ' is-invalid' : '' }}" name="observacion" value="{{ old('observacion') }}" required autofocus placeholder="">
                                @if ($errors->has('observacion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('observacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                             {{-- Ingreso Teléfono --}}
                            <div class="col-6">
                                <label for="telefono" >{{ __('Teléfono de contacto') }}</label>
                                <input id="telefono" type="tel" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus placeholder="">
                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                              {{-- Ingreso Dirección --}}
                            <div class="col-6">
                                <label for="direccion" >{{ __('Dirección') }}</label>
                                <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" required autofocus placeholder="">
                                @if ($errors->has('direccion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" value="tecnico" name="rol">
                         <input type="hidden" value="1" name="estado">
                         {{-- <input type="hidden" value="0" name="estado"> --}}
                         
                        <div class="form-group row">
                             {{-- Ingreso Contraseña --}}
                             <div class="col-md-6">
                            <label for="password" >{{ __('Contraseña') }} (*)</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                             {{-- Contirmar Ingreso de Contraseña --}}
                            <div class="col-md-6">
                                <label for="password-confirm" >{{ __('Confirmar contraseña') }} (*)</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
 {{-- ******************************** footer panel **************************************- --}}

                        <div class="card-footer col-md-12">
                            <div class="form-group row">
                                <div class="col-sm-10 label-column">
                                    <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
                                </div>
                                <div class="col-sm-0 input-column">
                                    <a href="{{ url('inicio') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">Cancelar</a>
                                </div>
                             </div>
                         </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.min.js"></script> --}}
@endsection
@extends('layouts.app')