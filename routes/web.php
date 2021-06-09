<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recetas_chinasController;
use App\Http\Controllers\recetas_coreanasController;
use App\Http\Controllers\recetas_japonesasController;
use App\Http\Controllers\recetas_tailandesasController;

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
    return view('index');
});

Route::get('/recetas', function () {
    return view('recetas');
});

Route::get('/sobreNosotros', function () {
    return view('sobreNosotros');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/show', function () {
    return view('china.show');
});
/*
Route::get('/comida_china', function () {
    return view('comida_china');
});



Route::get('/comida_coreana', function () {
    return view('comida_coreana');
});

Route::get('/comida_japonesa', function () {
    return view('comida_japonesa');
});

Route::get('/comida_tailandesa', function () {
    return view('comida_tailandesa');
});*/


Route::resource('recetas_coreanas', recetas_coreanasController::class);
Route::resource('recetas_japonesas', recetas_japonesasController::class);
Route::resource('recetas_tailandesas', recetas_tailandesasController::class);
Route::resource('recetas_chinas', recetas_chinasController::class);


/*
  <form action="{{ route('recetas_chinas.show',$recetas_chinas->id) }}" method="POST">
   <a class="btn btn-info" href="{{route(China.show,$recetas_chinas->id) }}">Ver receta</a>
            <a class="btn btn-info" href="{{ route('china.show',$recetas_chinas->id) }}">Ver receta</a>

        </form>

*/



