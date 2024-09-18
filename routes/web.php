<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

git config user.name devamarlina1910
git config user.email devamarlina.1019@gmail.com
*/



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/coba', function () {
   // return view('coba');
//});



Route::get('/coba', [CobaController::class, 'index']);