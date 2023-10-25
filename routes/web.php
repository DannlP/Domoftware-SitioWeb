<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PublicoController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\ReleController;








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//HOME//
Route::view('/home', "home")->name('home');


//LOGIN//
Route::view('/privada', "secret")->middleware('auth')->name('privada');
Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/iniciar-sesión',[LoginController::class,'login'])->name('iniciar-sesión');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    
//Perfil//
Route::middleware(['auth'])->group(function () {
Route::get('/profile', 'App\Http\Controllers\ProfileController@show')->name('profile.show');
Route::put('/profile/update', 'App\Http\Controllers\ProfileController@update')->name('profile.update');
});

//Arduino//
Route::get('/arduino', 'App\Http\Controllers\SensorController@mostrarDatos')->middleware('auth')->name('arduino');;
Route::get('/eliminar-dato/{id}', 'App\Http\Controllers\SensorController@eliminarDato')->name('eliminar_dato');
Route::get('/vista-ultimo-dato', [SensorController::class, 'vistaUltimoDato']);
Route::get('/vista-ultimo-dato', [SensorController::class, 'vistaUltimoDato'])->middleware('auth')->name('vista-ultimo-dato');
Route::get('/sensores', [SensorController::class, 'index']);
Route::post('/eliminar-registros', 'SensorController@eliminarRegistros')->name('eliminar-registros');
  
   
//Contact//
Route::get('/contacto', 'App\Http\Controllers\ContactoController@index')->name('contacto');
Route::post('/contacto', 'App\Http\Controllers\ContactoController@enviarCorreo');
 
//ADMINISTRADOR//

Route::get('/privada_admin', function () {
return view('privada_admin');
})->name('privada_admin');

 
// Rutas para ver la lista de usuarios
Route::get('/privada_admin', [UserController::class, 'index'])->name('privada_admin');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::get('/users/{id}/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit');

       
//QUIENES SOMOS//
Route::get('/quienes-somos', 'App\Http\Controllers\QuienesSomosController@index')->name('quienes_somos');


//RECUPERAR CONTRASEÑA//
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


//Rele//
Route::post('/update-relay-state', [UserController::class, 'updateRelayState'])->name('update.relay.state');
