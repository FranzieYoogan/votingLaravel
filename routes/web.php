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

Route::get('/biologist', function () {
    return view('biologist');
});

Route::get('/result', function () {
    return view('result');
});



Route::get('/', [Controller::class, 'getContestant']);

Route::get('/result', [Controller::class, 'getResult']);

Route::get('/chemist', [Controller::class, 'getChemist']);

Route::get('/biologist', [Controller::class, 'getBiologist']);

Route::post('/voted', [Controller::class, 'votedAstrophysicist']);

Route::post('/voted', [Controller::class, 'votedChemist']);

Route::post('/voted', [Controller::class, 'votedBiologist']);



Route::post('/', [Controller::class, 'votedAstrophysicist']);

Route::post('/chemist', [Controller::class, 'votedChemist']);

Route::post('/biologist', [Controller::class, 'votedBiologist']);
