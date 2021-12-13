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
//================= admin/user ============================
Route::get('/data-pegawai', [App\Http\Controllers\AdminController::class, 'user'])->name('admin.user');
//================= admin/atasan ============================
Route::get('/data-atasan', [App\Http\Controllers\AdminController::class, 'atasan'])->name('admin.atasan');
Route::post('/store-atasan', [App\Http\Controllers\AdminController::class, 'storeAtasan'])->name('admin.storeAtasan');
Route::put('/update-atasan/{id}', [App\Http\Controllers\AdminController::class, 'updateAtasan'])->name('admin.updateAtasan');
Route::delete('/delete-atasan/{id}', [App\Http\Controllers\AdminController::class, 'destroyAtasan'])->name('admin.deleteAtasan');
//================= adminsupir ============================
Route::get('/data-supir', [App\Http\Controllers\AdminController::class, 'supir'])->name('admin.supir');
Route::post('/store-supir', [App\Http\Controllers\AdminController::class, 'storeSupir'])->name('admin.storeSupir');
Route::put('/update-supir/{id}', [App\Http\Controllers\AdminController::class, 'updateSupir'])->name('admin.updateSupir');
Route::delete('/delete-supir/{id}', [App\Http\Controllers\AdminController::class, 'destroySupir'])->name('admin.deleteSupir');
//================= user ============================
Route::get('/page-user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
