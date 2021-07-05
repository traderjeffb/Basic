<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

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
Route::get('index', [employeeController::class, 'index'])->name('index');
Route::get('create',[employeeController::class, 'create'])->name('create');
Route::get('details/{id}',[employeeController::class, 'details'])->name('details');
Route::post('store',[employeeController::class, 'store'])->name('store');
Route::get('edit/{id}',[employeeController::class, 'edit'])->name('edit');
Route::post('update/{id}', [employeeController::class, 'update'])->name('update');

