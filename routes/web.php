<?php

use App\Http\Controllers\CustomerController;
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
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('customer/index',[CustomerController::class,'index'])->name('customer.index');
Route::get('customer/edit',[CustomerController::class,'edit'])->name('customer.edit');
Route::get('customer/delete',[CustomerController::class,'delete'])->name('customer.delete');
Route::post('customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::PUT('customer/update',[CustomerController::class,'update'])->name('customer.update');
Route::delete('customer/destroy',[CustomerController::class,'destroy'])->name('customer.destroy');
