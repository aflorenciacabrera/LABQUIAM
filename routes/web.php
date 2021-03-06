<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Rutas Publicas
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth', 'Admin']], function(){
    // Rutas Privadas
    Route::get('/home', 'HomeController@home');
    Route::get('/inicio','HomeController@inicio');
    Route::get('tecnico/inicio','HomeController@tecnico');
    Route::get('cliente/inicio','HomeController@cliente');
    Route::get('muestra/inicio','HomeController@muestra');

    // Administrador
    Route::get('admin/tecnico','AdministradorController@tecnico');
    Route::get('admin/cliente','AdministradorController@cliente');
    Route::delete('/inicio','AdministradorController@eliminarcuenta')->name("eliminarcuenta");

    // Tecnico
    Route::get('tecnico/nuevo','TecnicoController@tecnicoNuevo');
    Route::post('tecnico/nuevo','TecnicoController@crearTecnico');
    Route::get('tecnico/lista','TecnicoController@listaTecnico');
    Route::delete('tecnico/lista','TecnicoController@eliminartecnico')->name("eliminartecnico");

    // Cliente
    Route::get('cliente/nuevo','ClienteController@clienteNuevo');
    Route::post('cliente/nuevo','ClienteController@crearCliente');
    Route::get('cliente/lista','ClienteController@listaCliente');
    Route::delete('cliente/lista','ClienteController@eliminarcliente')->name("eliminarcliente");

    //Activar y suspender usuarios
    Route::get('/inicio/activar/{tipo}/{user}','HomeController@activar');
    Route::get('/inicio/suspender/{tipo}/{user}','HomeController@suspender');

    // PERFIL
    Route::get('/perfil','HomeController@perfil');
    Route::put('/perfil','HomeController@editarPerfil');
    Route::post('/perfil', 'HomeController@update_avatar');
    Route::delete('/perfil','HomeController@eliminarPerfil')->name("eliminarPerfil");

    // Muestra
    Route::get('muestra/nuevo', 'MuestraController@altaMuestra');
    Route::post('muestra/nuevo','MuestraController@crearMuestra');

    Route::get('muestra/procedencia', 'ProcedenciaController@altaPrecedencia');
    Route::post('muestra/procedencia','ProcedenciaController@crearPrecedencia');

     Route::get('muestra/tipodeanalisis', 'TipoanalisiController@altaTipoAnalisis');
    Route::post('muestra/tipodeanalisis','TipoanalisiController@crearTipoAnalisis');

     Route::get('muestra/tipodemuestra', 'TipomuestraController@altaTipoMuestra');
    Route::post('muestra/tipodemuestra','TipomuestraController@crearTipoMuestra');

    Route::get('muestra/lista','MuestraController@listaMuestra');
    // Route::get('/muestra/procedencia', 'MuestraController@procedencia');
    // Route::get('/muestra/tipodeanalisis', 'MuestraController@tipoDeAnalisis');
    // Route::get('/muestra/tipodemuestra', 'MuestraController@tipoDeMuestra');

    //Listas
    Route::get('/lista/cliente','AdministradorController@listaCliente');
    
    //Analisis tecnicas a implementar
    // Route::get('analisis/tecnica','AnalisiController@seleccionTecnica');
    // Route::post('analisis/tecnica','AnalisiController@crearAnalisis');
    Route::get('analisis/determinacion','DeterminacionController@altaTecnica');
    Route::post('analisis/determinacion','DeterminacionController@crearTecnica');
    Route::get('analisis/determinaciones/lista','DeterminacionController@listaTecnica');

    Route::get('analisis/agua/potable','AnalisiController@aguaPotable');
    Route::get('analisis/agua/estancada','AnalisiController@aguaEstancada');
    Route::get('analisis/determinaciones','AnalisiController@determinaciones');
   
    Route::get('analisis/resultados','AnalisiController@resultados');

    Route::get('muestra/informe','InformepdfController@informepdf');
    //Route::get('muestra/ver/informe','InformepdfController@informeverpdf');
    Route::get('muestra/ver/informe/{id}','InformepdfController@informeverpdf');
    Route::get('crear_reporte_porpais/{tipo}', 'InformepdfController@crear_reporte_porpais');

    Route::get('historial','HistorialController@historial');
});
