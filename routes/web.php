<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PemesananController;

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

Route::get('/auth', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/create', [PemesananController::class, 'create']);
Route::post('/pemesanan/store', [PemesananController::class, 'store']);
Route::get('/pemesanan/{nomor_antrian}/edit', [PemesananController::class, 'edit']);
Route::put('/pemesanan/{nomor_antrian}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{nomor_antrian}', [PemesananController::class, 'destroy']);
Route::get('/pemesanan/detail/{nomor_antrian}', [PemesananController::class, 'detail']);

require __DIR__ . '/auth.php';
