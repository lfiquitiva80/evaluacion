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
    return view('auth.login');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});



Route::get('norespuestaevaluador', function () {
	    return view('respuestaEvaluador.norespuesta');
	})->name('norespuestaevaluador');

Route::get('respuestaevaluador', function () {
	    return view('respuestaEvaluador.respuesta');
	})->name('respuestaevaluador');

Route::get('pdfevaluacion/{id}', 'PDFcontroller@Certificado')->name('pdfevaluacion');

Route::get('pdfevaluacion2/{id}', 'PDFcontroller@Certificado2')->name('pdfevaluacion2');

Route::get('certificadoeloy/{id}', 'PDFcontroller@certificadoeloy')->name('certificadoeloy');

Route::get('emailnorespuesta/{id}', 'emailController@norespuesta')->name('norespuesta');

Route::get('aceptacion/{id}', 'emailController@aceptacion')->name('aceptacion');



Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

Route::get('pdf', 'PDFcontroller@index');

Route::get('/home', 'HomeController@index')->name('homedos');

Route::resource('eventos_general','eventosGeneralController');

Route::resource('plantilla','plantillaController');

Route::get('/inicio', 'principalController@indexinicio')->name('inicio');

Route::resource('reportes', 'reportesController');

Route::get('/todos', 'principalController@indexall');

Route::get('/eventoscreate', 'principalController@create');

Route::get('/tematica', 'principalController@atematica')->name('tematica');

Route::post('savetematica', 'evento_areatematicaController@storenew')->name('editartematica');

Route::get('info', 'principalController@info');

Route::get('integrantes', 'principalController@participantes');

Route::get('ticket', 'principalController@ticket');

Route::get('send', 'principalController@email');

Route::get('email', 'emailController@index');

Route::get('emailinvitacion/{id}', 'emailController@invitar')->name('invitacion');

Route::get('emaildocumentos/{id}', 'emailController@documentos')->name('documentos');

Route::get('emailpagos/{id}', 'emailController@pagos')->name('pagos');

Route::get('certificadoypago/{id}', 'emailController@certificadoypago')->name('certificadoypago');

Route::get('gestionpago/{id}', 'emailController@gestionpago')->name('gestionpago');

Route::get('final_evaluacion/{id}', 'emailController@finalevaluacion')->name('finalevaluacion');

Route::get('devolver_finalevaluacion/{id}', 'emailController@devolver_finalevaluacion')->name('devolver_finalevaluacion');

Route::get('emailparticipantes', 'emailController@enviarparticipantes');

Route::get('partevento', 'emailController@partevento');

Route::get('enviarcorreo/{id}', 'emailController@enviarcorreo');

Route::get('correoparticipantes/{id}', 'emailController@editmailsparticipantes')->name('correoparticipantes');

Route::get('emaileditar/{id}', 'emailController@edit');

Route::get('emailparticipante', 'emailController@enviarparticipante');

Route::resource('participantes','participantesController');

Route::resource('area_tematica','areaTematicaController');

Route::resource('cuentadecobro','cuentacobroController');

Route::resource('departamento','departamentoController');

Route::resource('evento_areatematica','evento_areatematicaController');

Route::resource('participantesevento','participanteseventoController');

Route::get('editarevento/{id}', 'participanteseventoController@editarevento');

Route::get('updateplantilla/{id}', 'participanteseventoController@updateplantilla')->name('actualizarplantilla');

Route::get('homeprincipal', 'HomeController@index')->name('buscar');

Route::patch('actualizarasistencia/{id}', 'HomeController@update')->name('actualizarasistencia');

Route::resource('funcionarios','funcionariosController');

Route::resource('municipios','municipiosController');

Route::resource('paises','paisesController');

Route::resource('tipo_participacion','tipo_participacionController');

Route::resource('tiquetes','tiquetesController');

Route::resource('paises','paisesController');

Route::resource('excel', 'excelController');

Route::get('excelparticipantes/{id}', 'excelController@excelparticipantes')->name('xlsparticipantes');

Route::get('rangofechas', 'excelController@rangofechas')->name('rangofechas');

Route::get('excelproyectosall', 'excelController@excelproyectosall')->name('excelproyectosall');

Route::get('allusers', 'excelController@allusers')->name('allusers');

Route::get('allevaluadores', 'excelController@allevaluadores')->name('allevaluadores');

Route::get('allcriterios', 'excelController@allcriterios')->name('allcriterios');

Route::get('eloy', 'excelController@eloy')->name('eloy');

Route::get('innpulsa', 'excelController@innpulsa')->name('innpulsa');

Route::resource('evaluadores','evaluadoresController');

Route::get('settings','evaluadoresController@perfil')->name('settings');

Route::resource('proyectos_articulos','proyectos_articulosController');

Route::resource('evaluacion_par','evaluacion_parController');

Route::resource('comunicados', 'comunicadosController');

Route::resource('confidencialidad', 'confidencialidadController');

Route::get('crearconfidencialidad/{id}', 'confidencialidadController@confidencialidad')->name('crearconfidencialidad');

Route::get('rectificacion','comunicadosController@rectificacion_errores')->name('rectificacion_errores');

Route::get('soporte','comunicadosController@soporte')->name('soporte');

Route::get('enviarcorreosoporte','comunicadosController@enviarcorreosoporte')->name('enviarcorreosoporte');

Route::resource('criterios_evaluacion', 'criterios_evaluacionController');

Route::get('duplicar/{duplicar}', 'criterios_evaluacionController@duplicar')->name('duplicar');

Route::get('preguntasduplicar', 'preguntasController@duplicarvarios')->name('preguntasduplicar');

Route::get('duplicarproyectos', 'preguntasController@duplicarproyectos')->name('duplicarproyectos');

Route::get('preguntaseloy/{id}', 'preguntasController@editformeloyvalenzuela')->name('preguntaseloy');

Route::get('showeloy/{id}', 'preguntasController@showeloy')->name('showeloy');

Route::get('subircalificacion/{subircalificacion}', 'proyectos_articulosController@subircalificacion')->name('subircal');

Route::get('updatecalificacion/{updatecalificacion}', 'proyectos_articulosController@updatecalificacion')->name('updatecal');

Route::resource('preguntas', 'preguntasController');

Route::resource('usuarios', 'usuariosController');

Route::resource('dashboard', 'dashboardController');

Route::resource('gestion_pago', 'gestionpagoController');

Route::get('confirmación_financiera/{id}', 'gestionpagoController@confirmacionpago')->name('confirmacionpago');

Route::get('doccuentacobro/{id}', 'gestionpagoController@cuentacobro')->name('cuentacobro');

Route::get('crearcuentacobro/{id}', 'cuentacobroController@crearcuentacobro')->name('infofinanciera');

Route::get('confidencialidad/{id}', 'gestionpagoController@confidencialidad')->name('confidencialidad');

Route::get('arreglo_criterios', 'preguntasController@ArregloCriterios')->name('arreglo_criterios');

Route::get('siaceptopago/{id}', 'proyectos_articulosController@siAceptoElPago')->name('siAceptoElPago');

Route::get('noaceptopago/{id}', 'proyectos_articulosController@noAceptoElPago')->name('noAceptoElPago');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('error', function(){     abort(500); });


    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


Route::group(['middleware' => ['UEstandar']], function () {

});
