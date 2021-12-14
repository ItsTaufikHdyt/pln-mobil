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
Route::get('/data-pegawai', [App\Http\Controllers\AdminController::class, 'pegawai'])->name('admin.pegawai');
Route::post('/store-pegawai', [App\Http\Controllers\AdminController::class, 'storePegawai'])->name('admin.storePegawai');
Route::put('/update-pegawai/{id}', [App\Http\Controllers\AdminController::class, 'updatePegawai'])->name('admin.updatePegawai');
Route::delete('/delete-pegawai/{id}', [App\Http\Controllers\AdminController::class, 'destroyPegawai'])->name('admin.deletePegawai');
//================= admin/atasan ============================
Route::get('/data-atasan', [App\Http\Controllers\AdminController::class, 'atasan'])->name('admin.atasan');
Route::post('/store-atasan', [App\Http\Controllers\AdminController::class, 'storeAtasan'])->name('admin.storeAtasan');
Route::put('/update-atasan/{id}', [App\Http\Controllers\AdminController::class, 'updateAtasan'])->name('admin.updateAtasan');
Route::delete('/delete-atasan/{id}', [App\Http\Controllers\AdminController::class, 'destroyAtasan'])->name('admin.deleteAtasan');
//================= admin/supir ============================
Route::get('/data-supir', [App\Http\Controllers\AdminController::class, 'supir'])->name('admin.supir');
Route::post('/store-supir', [App\Http\Controllers\AdminController::class, 'storeSupir'])->name('admin.storeSupir');
Route::put('/update-supir/{id}', [App\Http\Controllers\AdminController::class, 'updateSupir'])->name('admin.updateSupir');
Route::delete('/delete-supir/{id}', [App\Http\Controllers\AdminController::class, 'destroySupir'])->name('admin.deleteSupir');
//================= admin/unit ============================
Route::get('/data-unit', [App\Http\Controllers\AdminController::class, 'unit'])->name('admin.unit');
Route::post('/store-unit', [App\Http\Controllers\AdminController::class, 'storeUnit'])->name('admin.storeUnit');
Route::put('/update-unit/{id}', [App\Http\Controllers\AdminController::class, 'updateUnit'])->name('admin.updateUnit');
Route::delete('/delete-unit/{id}', [App\Http\Controllers\AdminController::class, 'destroyUnit'])->name('admin.deleteUnit');
//================= admin/mobil ============================
Route::get('/data-mobil', [App\Http\Controllers\AdminController::class, 'mobil'])->name('admin.mobil');
Route::post('/store-mobil', [App\Http\Controllers\AdminController::class, 'storeMobil'])->name('admin.storeMobil');
Route::put('/update-mobil/{id}', [App\Http\Controllers\AdminController::class, 'updateMobil'])->name('admin.updateMobil');
Route::delete('/delete-mobil/{id}', [App\Http\Controllers\AdminController::class, 'destroyMobil'])->name('admin.deleteMobil');
//================= user ============================
Route::get('/page-user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
//================= user/profil ============================
Route::get('/data-profil', [App\Http\Controllers\UserController::class, 'profil'])->name('user.profil');
Route::post('/store-profil', [App\Http\Controllers\UserController::class, 'storeProfil'])->name('user.storeProfil');
Route::put('/update-profil/{id}', [App\Http\Controllers\UserController::class, 'updateProfil'])->name('user.updateProfil');
Route::delete('/delete-profil/{id}', [App\Http\Controllers\UserController::class, 'destroyProfil'])->name('user.deleteProfil');
