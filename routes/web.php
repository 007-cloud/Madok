<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
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


Route::get('/', [ContactController::class, 'index'])->name("contact.home");
Route::get('detail/{id}', [ContactController::class, 'show'])->name('contact.show');
Route::get('edit/{id}', [ContactController::class, 'update'])->name("contact.update");
Route::get('delete/{id}', [ContactController::class, 'destroy'])->name("contact.destroy");
Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact/create', [ContactController::class, 'store'])->name('contact.store');

