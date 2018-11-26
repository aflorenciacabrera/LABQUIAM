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
                            Administrar
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/muestra/procedencia">Procedencia</a>
                            <a class="dropdown-item" href="/muestra/tipodemuestra">Tipo de muestra</a>
                            <a class="dropdown-item" href="/muestra/tipodeanalisis">Tipo de analisis</a>
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
                        <button class="btn btn-light mr-2" type="reset">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
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
