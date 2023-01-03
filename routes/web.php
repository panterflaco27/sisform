<?php

use App\Http\Controllers\EgresadoController;
use Illuminate\Support\Facades\Route;


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

/*Route::get('/', function () {
    return view('home');
});

Route::get('/login', [SessionController::class, 'create'])
    -> name('login.index');

Route::get('/register', [RegisterController::class, 'create'])
    -> name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    -> name('register.store');
*/
Route::get('/', function(){
    return view('egresados');
});
/*
Route::get('/egresados', function(){
    return view('egresados');
});

Route::get('/formularios', function(){
    return view('formularios');
});*/


Route::resource('egresado', EgresadoController::class);