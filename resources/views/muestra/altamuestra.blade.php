@extends('layouts.footer')
@extends('layouts.app')
@section('content')

{{-- Alta de tecnico --}}
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4">Alta Muestra</h1>

                    <div class="dropdown">
                        <a class="btn btn-white dropdown-toggle"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            Agregar
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Procedencia</a>
                            <a class="dropdown-item" href="#">Tipo de muestra</a>
                            <a class="dropdown-item" href="#">Tipo de analisis</a>
                        </div>
                    </div>
                </div>

                <form method="POST">
                    <div class="card-body">
                        @csrf

                        <div class="form-group row">
                            <div class="col-6">
                                <label for="input-fecha-ingreso">Fecha de ingreso (*)</label>
                                <input type="date" class="form-control" id="input-fecha-ingreso" placeholder="Ej: 2018/11/29" required>
                            </div>
                            <div class="col-6">
                                <label for="input-fecha-toma">Fecha de toma (*)</label>
                                <input type="date" class="form-control" id="input-fecha-toma" placeholder="Ej: 2018/11/29" required>
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                        </div> --}}

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="input-procedencia">Seleccione una procedencia (*)</label>
                                <select class="form-control form-control" id="input-procedencia" required>
                                    <option>Procedencia 1</option>
                                    <option>Procedencia 2</option>
                                    <option>Procedencia 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="input-tipo-muestra">Seleccione un tipo de muestra (*)</label>
                                <select class="form-control form-control" id="input-tipo-muestra" required>
                                    <option>Tipo de muestra 1</option>
                                    <option>Tipo de muestra 2</option>
                                    <option>Tipo de muestra 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="input-remitida-tomada" id="input-remitida" value="remitida" required>
                                    <label class="form-check-label" for="input-remitida">Remitida</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="input-remitida-tomada" id="input-tomada" value="tomada" required>
                                    <label class="form-check-label" for="input-tomada">Tomada</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="input-tipo-de-analisis">Seleccione un tipo de analisis (*)</label>
                                <select class="form-control form-control" id="input-tipo-de-analisis" required>
                                    <option>Tipo de analisis 1</option>
                                    <option>Tipo de analisis 2</option>
                                    <option>Tipo de analisis 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="input-descripcion">Descripcion</label>
                                <textarea class="form-control" id="input-descripcion" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="input-descripcion">Detalle</label>
                                <textarea class="form-control" id="input-descripcion" rows="3"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-muted d-flex justify-content-end">
                        <button class="btn btn-light mr-2">Cancelar</button>
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
            {{-- <div class="card">
                <div class="card-header text-center">
                    <h4>Alta Muestra</h4>
                </div>

                <div class="card-body">
                    <form method="POST">
                        @csrf

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

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-center">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>



                        <div class="card-footer">
                            <div class="form-group col-12">
                                <div class="col-12 label-column d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
                                    <a href="{{ url('inicio') }}" data-original-title="cancelar" data-toggle="tooltip" role ="button"  class="btn  btn-danger  ">Cancelar</a>
                                </div>
                             </div>
                         </div>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</div>


@endsection
