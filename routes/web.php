<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;


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

Route::get('/ex1', function () {
    $name = 'João';
    $energy = 8000;
    return view('hello', compact('name'));
});
Route::get('/ex2', function () {
    $energy = 8001;
    return view('dbz', compact('energy'));
});
Route::get('/ex3', function () {
    $names = ['Chico', 'Tiana','Afonsa','Tonha'];
    return view('clients', compact('names'));
});

Route::post('/photo', [ExerciseController::class, 'photo']);

Route::post('/images', [ExerciseController::class, 'images']);

Route::get('/', function(){
    return view('welcome');
});

