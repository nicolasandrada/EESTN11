<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;

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

Route::get('/', function(){
    return redirect('/docente');
});
//Route::get('/guardarDocente', [DocenteController::class, 'create']);
//Route::post('/guardarDocente', [DocenteController::class, 'store']);



Route::resource('/docente', DocenteController::class);
