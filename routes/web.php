<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactosController;

/*Route::get('/', function () {
    return view('welcome');
});*/
//con esta si funcionó
//Route::get('/contactos', [App\Http\Controllers\ContactosController::class, 'index']);
Route::get('/token', function () {
    return csrf_token(); 
});
Auth::routes();
Route::resource('contactos','ContactosController');
//Route::get('/contacto', [ContactosController::class]);
