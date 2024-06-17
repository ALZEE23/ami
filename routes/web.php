<?php

use App\Http\Controllers\KertasKerjaController;
use App\Http\Controllers\KesiapanStrukuturController;
use App\Http\Controllers\RpjmdController;
use App\Http\Controllers\AnalisisKesenjanganController;
use App\Http\Controllers\AnalisisSwotController;
use App\Http\Controllers\GapController;
use App\Http\Controllers\SasaranSmartController;
use App\Http\Controllers\SettingAplikasiController;
use App\Models\AnalisisKesenjangan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

//Route Dashboard Where user after login
Route::get('/', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route Where Auth User
Route::middleware('auth')->group(function () {
    //Route Form
    Route::group(['prefix' => '/form'], function () {

        //Route RPJMD
        Route::resource('rpjmd',RpjmdController::class); 

        //Route Analisis Masa Depan
        Route::resource('masa-depan', KertasKerjaController::class);

        //Route Analisis Kesiapan
        Route::resource('kesiapan', KesiapanStrukuturController::class);

        //Route Analisis Kesenjangan
        Route::resource('kesenjangan', AnalisisKesenjanganController::class);

        //Route GAP Indikator RPJMD
        Route::resource('gap-indikator-rpjmd', GapController::class);

        //Route Analisis Swot/Twos
        Route::resource('swot', AnalisisSwotController::class);

        //Route Sasaran Pembangunan
        Route::resource('sasaran-pembangunan', SasaranSmartController::class); 

        //Route Settings
        Route::resource('settings', SettingAplikasiController::class);

        //Route Inventaris Invasi/Aplikasi
        Route::get('/inventaris-inovasi', function () {
            return Inertia::render('Inventaris');
        })->name('form.gap-indikator-rpjmd');
    });
});

require __DIR__ . '/auth.php';
