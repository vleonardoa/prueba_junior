<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BusinessProfileController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\Fase3Controller;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PassportClientsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PruebaApiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('login/{driver}', [LoginController::class,'redirectToProvider'])->name('social_auth');
Route::get('login/{driver}/callback', [LoginController::class,'handleProviderCallback']);



/**
 * Rutas admin
 */
Route::group(['prefix' => 'admin','middleware' => ['role:Admin|Superadmin|Developer','auth']], function () {


    Route::group(['as' => 'admin.'],function (){

        Route::get('/', [HomeAdminController::class,'index'])->name('index');
        Route::get('/home', [HomeAdminController::class,'index'])->name('home');
        Route::get('/dashboard', [HomeAdminController::class,'dashboard'])->name('dashboard');
        Route::get('/calendar', [HomeAdminController::class,'calendar'])->name('calendar');

    });

    Route::group(['prefix' => 'dev','as' => 'dev.'],function (){

        Route::get('prueba/api',[PruebaApiController::class,'index'])->name('prueba.api');

        Route::get('passport/clients', [PassportClientsController::class,'index'])->name('passport.clients');

        Route::resource('configurations', ConfigurationController::class);

    });

    Route::resource('users', UserController::class);
    Route::get('user/{user}/menu', [UserController::class,'menu'])->name('user.menu');;
    Route::patch('user/menu/{user}', [UserController::class,'menuStore'])->name('users.menuStore');

    Route::get('option/create/{option}', [OptionController::class,'create'])->name('option.create');
    Route::get('option/orden', [OptionController::class,'updateOrden'])->name('option.order.store');
    Route::resource('options',OptionController::class);

    Route::resource('roles', RoleController::class);

    Route::resource('permissions', PermissionController::class);



});

/**
 * Rutas web
 */
Route::group(['prefix' => ''], function () {


    Route::get('/', [App\Http\Controllers\UmlController::class,'index'])->name('index');
    Route::get('home', [App\Http\Controllers\UmlController::class,'index'])->name('home');


    Route::get('about', [HomeController::class,'about'])->name('about');
    Route::get('contact', [HomeController::class,'contact'])->name('contact');
    Route::get('cambio/idioma/{lang}', [HomeController::class,'cambioIdioma'])
        ->where([
            'lang' => 'en|es'
        ])
        ->name('cambio.idioma');


});

Route::middleware('auth')->group(function () {
    Route::resource('estados', App\Http\Controllers\EstadoController::class);
    Route::resource('modelos', App\Http\Controllers\ModeloController::class);
    Route::resource('marcas', App\Http\Controllers\MarcaController::class);
    Route::resource('tipos', App\Http\Controllers\TipoController::class);
    Route::resource('clientes', App\Http\Controllers\ClienteController::class);
    Route::resource('equipos', App\Http\Controllers\EquipoController::class);
    Route::resource('servicios', App\Http\Controllers\ServicioController::class);

    Route::get('uml', [App\Http\Controllers\UmlController::class,'index'])->name('uml.index');

    Route::prefix('fase3')->name('fase3.')->group(function () {
        Route::get('/nivel1', [Fase3Controller::class, 'Nivel1'])->name('nivel1');
        Route::get('/nivel2', [Fase3Controller::class, 'Nivel2'])->name('nivel2');
        Route::get('/nivel3', [Fase3Controller::class, 'Nivel3'])->name('nivel3');
    });
});


