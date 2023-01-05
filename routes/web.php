<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\DepartmentsController::class, 'index'])->name('home');
// Route::get('/', 'DepartmentsController@index'); // localhost:8000/
Route::get('/getEmployees/{id}',  [App\Http\Controllers\DepartmentsController::class, 'getEmployees']);