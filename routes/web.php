<?php

use App\Http\Controllers\LoginCOntroller;
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

Route::get('/', function () {
    return view('dasboard');
});

Route::get('/login',[LoginCOntroller::class,'index']);
Route::post('/login',[LoginCOntroller::class,'authenticate']);
