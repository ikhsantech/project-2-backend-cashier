<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\CategoryController;
Use App\Http\Controllers\MenuController;
Use App\Http\Controllers\PelangganController;
Use App\Http\Controllers\MejaController;
Use App\Http\Controllers\StokController;
Use App\Http\Controllers\JenisController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


route::apiResource('/category',CategoryController::class);
route::apiResource('/menu',MenuController::class);
route::apiResource('/pelanggan',PelangganController::class);
route::apiResource('/meja',MejaController::class);
route::apiResource('/stok',StokController::class);
route::apiResource('/jenis',JenisController::class);

