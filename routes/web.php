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


Auth::routes();

//================= login ============================
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login-proses', [App\Http\Controllers\Auth\LoginController::class, 'HandleLogin'])->name('login-proses');
//================= admin ============================
Route::get('/page-admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
//================= user ============================
Route::get('/page-user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
