@extends('layouts.footer')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <div class="d-flex justify-content-between align-items-center py-2">
                    <h1 class="font-weight-light">Tipos de analisis</h1>
                    <div>
                        <button
                            type="button"
                            id="btnModalNuevaProcedencia"
                            class="btn btn-primary d-flex justify-content-center align-items-center"
                            data-toggle="modal"
                            data-target="#modalProcedencia">
                            <i class="material-icons">add</i>
                            Tipo de analisis
                        </button>
                    </div>
                </div>
                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipos_de_analisis as $item)
                        <tr>
                            <th
                                class="table-procedencia-nombre"
                                data-key="{{ $item->id }}"
                                scope="row"
                                >{{ $item->tipo_de_analisis }}</th>
                            {{-- <td
                                class="table-procedencia-id"
                                data-key="{{ $item->id }}"
                                class="d-none"
                                >{{ $item->id }}</td> --}}
                            <td>
                                <button
                                    type="button"
                                    data-key="{{ $item->id }}"
                                    class="btnModalEliminarProcedencia table-procedencia-btn btn btn-light material-icons md-24 md-dark c-pointer"
                                    data-toggle="modal"
                                    data-target="#modalProcedencia">
                                    delete
                                </button>
                                <button
                                    type="button"
                                    data-key="{{ $item->id }}"
                                    class="btnModalActualizarProcedencia btn btn-light material-icons md-24 md-dark c-pointer"
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
                      <label for="input-fecha-ingreso">Nombre del tipo de analisis (*)</label>
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



@endsection

@section('content-footer')
<script>
    $(document).ready(function () {
        // -------------------------------- AGREGAR PROCEDENCIA --------------------------------
        $('#btnModalNuevaProcedencia').click(function (e) {

            $('#modalProcedencia').on('shown.bs.modal', function (e) {
                const modal = $(this)

                modal.find('.modal-title').text('Agregar tipo de analisis')

                $('#modal-input-procedencia-id').val(-1)
                $('#modal-input-procedencia-nombre').val('')

                $('#btn-submit').text('Agregar')

                $('#modal-input-procedencia-nombre').prop('disabled', false)
                $('#form-procedencia').attr('method', 'post')
                $('#form-procedencia').attr('action', `/muestra/tipo_de_muestra/agregar`)
            })
        })

        // document.querySelectorAll('.btnModalEliminarProcedencia').forEach((btn) => {
        //     console.log(btn)
        // })
        // -------------------------------- ELIMINAR PRODECENCIA --------------------------------
        $('.btnModalEliminarProcedencia').click(function (e) {
            const key = $(this).attr('data-key')
            $('#modalProcedencia').on('shown.bs.modal', function (e) {
                const modal = $(this)

                const nombreProcedencia = $(`.table-procedencia-nombre[data-key="${key}"]`).text()
                const idProcedencia = $(`.table-procedencia-id[data-key="${key}"]`).text()

                modal.find('.modal-title').text('Eliminar tipo de analisis')

                $('#modal-input-procedencia-id').val(idProcedencia)
                $('#modal-input-procedencia-nombre').val(nombreProcedencia)
                $('#btn-submit').text('Eliminar')


                $('#modal-input-procedencia-nombre').prop('disabled', true)
                $('#form-procedencia').attr('method', 'post')
                $('#form-procedencia').attr('action', `/muestra/tipo_de_muestra/${idProcedencia}/eliminar`)
            })
        })

        // // -------------------------------- ACTUALIZAR PROCEDENCIA --------------------------------
        $('.btnModalActualizarProcedencia').click(function (e) {
            const key = $(this).attr('data-key')
            $('#modalProcedencia').on('shown.bs.modal', function (e) {
                const modal = $(this)

                const nombreProcedencia = $(`.table-procedencia-nombre[data-key="${key}"]`).text()
                const idProcedencia = $(`.table-procedencia-id[data-key="${key}"]`).text()

                modal.find('.modal-title').text('Actualizar tipo de analisis')

                $('#modal-input-procedencia-id').val(idProcedencia)
                $('#modal-input-procedencia-nombre').val(nombreProcedencia)
                $('#btn-submit').text('Actualizar')


                $('#modal-input-procedencia-nombre').prop('disabled', false)
                $('#form-procedencia').attr('method', 'post')
                $('#form-procedencia').attr('action', `/muestra/tipo_de_muestra/${idProcedencia}/actualizar`)
            })
        })
    })

</script>
@endsection

