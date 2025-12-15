<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (SANCTUM)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function () {

    // ================= PRODUK =================
    Route::post('/produk/create', [ProdukController::class, 'create']);
    Route::get('/produk/read', [ProdukController::class, 'read']);
    Route::post('/produk/update', [ProdukController::class, 'update']);
    Route::post('/produk/delete', [ProdukController::class, 'delete']);

    // ================= KATEGORI =================
    Route::post('/kategori/create', [KategoriController::class, 'create']);
    Route::get('/kategori/read', [KategoriController::class, 'read']);
    Route::post('/kategori/update', [KategoriController::class, 'update']);
    Route::post('/kategori/delete', [KategoriController::class, 'delete']);

    // ================= PELANGGAN =================
    Route::post('/pelanggan/create', [PelangganController::class, 'create']);
    Route::get('/pelanggan/read', [PelangganController::class, 'read']);
    Route::post('/pelanggan/update', [PelangganController::class, 'update']);
    Route::post('/pelanggan/delete', [PelangganController::class, 'delete']);

});
