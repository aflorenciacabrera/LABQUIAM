@extends('layouts.footer')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <div class="d-flex justify-content-between align-items-center py-2">
                    <h1 class="font-weight-light">Procedencias</h1>
                    <div>
                        <button
                            type="button"
                            id="btnModalNuevaProcedencia"
                            class="btn btn-primary d-flex justify-content-center align-items-center"
                            data-toggle="modal"
                            data-target="#modalProcedencia">
                            <i class="material-icons">add</i>
                            Procedencia
                        </button>
                    </div>
                </div>
                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">Procedencia</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <td scope="row">{{ $parametro }}</td>
                        <th>Nada</th> --}}
                        @foreach ($procedencias as $item)
                        <tr>
                            <th scope="row" id="table-procedencia-nombre">{{ $item->procedencia }}</th>
                            <td class="d-none" id="table-procedencia-id">{{ $item->id }}</td>
                            <td>
                                <button
                                    type="button"
                                    id="btnModalEliminarProcedencia"
                                    class="btn btn-light material-icons md-24 md-dark c-pointer"
                                    data-toggle="modal"
                                    data-target="#modalProcedencia">
                                    delete
                                </button>
                                <button
                                    type="button"
                                    id="btnModalActualizarProcedencia"
                                    class="btn btn-light material-icons md-24 md-dark c-pointer"
                                    data-toggle="modal"
                                    data-target="#modalProcedencia">
                                    edit
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Modal Nueva Procedencia -->
<div class="modal fade" id="modalProcedencia" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form class="modal-content" id="form-procedencia">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container">
              <div class="form-group row">
                  <input class="modal-input-procedencia-id" id="modal-input-procedencia-id" type="hidden" name="id" value="-1">
                  <div class="col-12">
                      <label for="input-fecha-ingreso">Nombre de la procedencia (*)</label>
                      <input type="text" id="modal-input-procedencia-nombre" class="modal-input-procedencia-nombre form-control" name="nombre" id="input-fecha-ingreso" placeholder="Ej: J. P. Ramirez" required>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btn-submit"></button>
      </div>
    </form>
  </div>
</div>


<!-- Modal Eliminar Procedencia -->
{{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Nueva procedencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body container">
        <div class="form-group row">
            <div class="col-12">
                <label for="input-fecha-ingreso">Nombre de la procedencia (*)</label>
                <input type="text" class="form-control" id="input-fecha-ingreso" placeholder="Ej: J. P. Ramirez" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
    </form>
  </div>
</div> --}}

@endsection
{{-- modalProcedenciaTitulo --}}
@section('content-footer')
<script>
    $(document).ready(function () {
        // -------------------------------- AGREGAR PROCEDENCIA --------------------------------
        $('#btnModalNuevaProcedencia').click(function (e) {

            $('#modalProcedencia').on('shown.bs.modal', function (e) {
                const modal = $(this)

                modal.find('.modal-title').text('Agregar Procedencia')

                $('#modal-input-procedencia-id').val(-1)
                $('#modal-input-procedencia-nombre').val('')

                $('#btn-submit').text('Agregar')

                $('#modal-input-procedencia-nombre').prop('disabled', false)
                $('#form-procedencia').attr('method', 'post')
                $('#form-procedencia').attr('action', `/muestra/procedencia/agregar`)
            })
        })

        // -------------------------------- ELIMINAR PRODECENCIA --------------------------------
        $('#btnModalEliminarProcedencia').click(function (e) {

            $('#modalProcedencia').on('shown.bs.modal', function (e) {
                const modal = $(this)

                const nombreProcedencia = $('#table-procedencia-nombre').text()
                const idProcedencia = $('#table-procedencia-id').text()

                modal.find('.modal-title').text('Eliminar Procedencia')

                $('#modal-input-procedencia-id').val(idProcedencia)
                $('#modal-input-procedencia-nombre').val(nombreProcedencia)
                $('#btn-submit').text('Eliminar')

                $('#modal-input-procedencia-nombre').prop('disabled', true)
                $('#form-procedencia').attr('method', 'post')
                $('#form-procedencia').attr('action', `/muestra/procedencia/${idProcedencia}/eliminar`)
            })
        })

        // -------------------------------- ACTUALIZAR PROCEDENCIA --------------------------------
        $('#btnModalActualizarProcedencia').click(function (e) {

            $('#modalProcedencia').on('shown.bs.modal', function (e) {
                const modal = $(this)

                const nombreProcedencia = $('#table-procedencia-nombre').text()
                const idProcedencia = $('#table-procedencia-id').text()

                modal.find('.modal-title').text('Actualizar Procedencia')

                $('#modal-input-procedencia-id').val(idProcedencia)
                $('#modal-input-procedencia-nombre').val(nombreProcedencia)
                $('#btn-submit').text('Actualizar')

                $('#modal-input-procedencia-nombre').prop('disabled', false)
                $('#form-procedencia').attr('method', 'post')
                $('#form-procedencia').attr('action', `/muestra/procedencia/${idProcedencia}/actualizar`)
            })
        })
    })

</script>
@endsection

