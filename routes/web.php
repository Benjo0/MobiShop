<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\OsystemsController;
use App\Http\Controllers\SellingController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('phones',[PhoneController::class,'index'])->name('phones');
Route::middleware(['auth:sanctum', 'verified'])->get('add_phone',[PhoneController::class,'create'])->name('add_phone');
Route::middleware(['auth:sanctum', 'verified'])->post('store_phone',[PhoneController::class,'store'])->name('store_phone');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_phone',[PhoneController::class,'delete'])->name('delete_phone');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_phone',[PhoneController::class,'edit'])->name('edit_phone');
Route::middleware(['auth:sanctum', 'verified'])->post('update_phone',[PhoneController::class,'update'])->name('update_phone');


Route::middleware(['auth:sanctum', 'verified'])->get('osystems', [OsystemsController::class, 'index'])->name('osystems');
Route::middleware(['auth:sanctum', 'verified'])->get('add_osystem', [OsystemsController::class, 'create'])->name('add_osystem');
Route::middleware(['auth:sanctum', 'verified'])->post('store_osystem', [OsystemsController::class, 'store'])->name('store_osystem');

Route::middleware(['auth:sanctum', 'verified'])->get('sellings',[SellingController::class,'index'])->name('sellings');