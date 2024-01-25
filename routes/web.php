<?php

use App\Http\Controllers\Grade;
use App\Http\Controllers\Train;
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
    return view('template.master');
});
Route::get('/grade', [Grade::class , 'index']);
Route::post('/grade-store', [Grade::class , 'store']);

Route::get('/train', [Train::class , 'index']);
Route::post('/train-store', [Train::class , 'store']);
