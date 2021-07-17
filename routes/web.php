<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;


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
Route::get('employee.index', [employeeController::class, 'index'])->name('employee.index');
Route::get('employee.create',[employeeController::class, 'create'])->name('employee.create');
Route::get('employee.details/{id}',[employeeController::class, 'details'])->name('employee.details');
Route::post('employee.store',[employeeController::class, 'store'])->name('employee.store');
Route::get('employee.edit/{id}',[employeeController::class, 'edit'])->name('employee.edit');
Route::post('employee.update/{id}',[employeeController::class, 'update'])->name('employee.update');
Route::get('employee.delete/{id}',[employeeController::class, 'delete'])->name('employee.delete');
Route::get('employee.destroy/{id}',[employeeController::class, 'destroy'])->name('employee.destroy');

//Customer
Route::get('customer.index', [CustomerController::class, 'index'])->name('customer.index');
Route::get('customer.list', [CustomerController::class, 'getCustomers'])->name('customer.list');
Route::get('customer.details{id}', [CustomerController::class, 'index'])->name('customer.details');
Route::get('customer.edit{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::get('customer.create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer.store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('customer.destroy/{id}',[CustomerController::class, 'destroy'])->name('customer.destroy');

//Route::get('test',[employeeController::class, 'test'])->name('test');
//Product
Route::get('index',[ProductController::class, 'index'])->name('product.index');