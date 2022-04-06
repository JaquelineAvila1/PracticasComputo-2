<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TestControler;


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
    return view('welcome');
});
 //crear ruta

 Route::get('/test', [TestControler::class, 'index']);