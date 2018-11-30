@extends('layouts.footer')
@extends('layouts.menu')
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
                    <form method="POST"  action="{{ route('register')}}">
                        @csrf

                        {{-- ******************************************************************************--}}
                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-center">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" value="tecnico" name="rol">
                          <input type="hidden" value="1" name="estado">
                        {{--******************************************************************************--}}
                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-center">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--******************************************************************************--}}
                          <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-center">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--******************************************************************************--}}
                         <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-center">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
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

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@extends('layouts.app')