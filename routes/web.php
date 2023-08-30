<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');

}); 

Route::get('/bebidas', function () {
        $titulo = "Listado de Bebidas";
    return view('bebidas', array(
        'titulo' => $titulo
    ));

});

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {x  z       z   
//     return view('auth.register');
// })->name('register');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');



