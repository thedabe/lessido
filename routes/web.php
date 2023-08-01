<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\clientcontroller;
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
    return view('index');
});

Route::get('/dashboardAdmin', function () {
    return view('coolAdmin/dashboardAdmin');
});

Route::get('/pageconnexion', function () {
    return view('pageconnexion');
});


Route::get('/motdepasse', function () {
    return view('coolAdmin/motdepasse');
});
Route::post('/commander/ajouter',[clientcontroller::class,'commander_ajouter']);
Route::post('/candidater/lessidos',[clientcontroller::class,'candidater']);
