<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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


Route::get('/voted', function () {
    return view('voted');
});

Route::get('/chemist', function () {
    return view('chemist');
});




Route::get('/', [Controller::class, 'getContestant']);

Route::get('/chemist', [Controller::class, 'getChemist']);

Route::post('/voted', [Controller::class, 'voted']);

Route::post('/voted', [Controller::class, 'votedChemist']);
