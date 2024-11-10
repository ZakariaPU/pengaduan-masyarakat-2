<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\VisitorController;
use App\Http\Controllers\VisitorCounterController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TeamController;

// Route::get('/', [VisitorController::class, 'index']);


Route::get('/', [VisitorCounterController::class, 'index']);



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/team', [TeamController::class, 'index'])->name('team');


// Admin/Petugas
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::resource('pengaduans', 'PengaduanController');

        Route::resource('tanggapan', 'TanggapanController');

        Route::get('masyarakat', 'AdminController@masyarakat');
        Route::resource('petugas', 'PetugasController');

        Route::get('laporan', 'AdminController@laporan');
        Route::get('laporan/cetak', 'AdminController@cetak');
        Route::get('pengaduan/cetak/{id}', 'AdminController@pdf');
});


// Masyarakat
Route::prefix('user')
    ->middleware(['auth', 'MasyarakatMiddleware'])
    ->group(function() {
		Route::get('/', 'MasyarakatController@index')->name('masyarakat-dashboard');
        Route::resource('pengaduan', 'MasyarakatController');
        Route::get('pengaduan', 'MasyarakatController@lihat');
});


require __DIR__.'/auth.php';
