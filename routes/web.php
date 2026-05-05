<?php



use App\Http\Controllers\ProdiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fakultas.create');
});

Route::resource('Fakultas', FakultasController::class);
Route::resource('Periode', PeriodeController::class);
Route::resource('Berita', BeritaController::class);
Route::resource('Prodi', ProdiController::class);