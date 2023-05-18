<?php

use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\KursController;
use App\Http\Controllers\KursKategorijaController;
use App\Http\Controllers\PredavacController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::get('kursevi', [KursController::class, 'index']);

Route::get('kategorija/{id}/kurs', [KursKategorijaController::class, 'index']);

Route::delete('obrisiKurs/{id}', [KursController::class, 'destroy']);
Route::post('novaKategorija', [KategorijaController::class, 'store']);

Route::resource('kategorije', KategorijaController::class)->only(['index','show']);
Route::resource('predavaci', PredavacController::class)->only(['index' ,'show', 'store', 'update', 'destroy']);
