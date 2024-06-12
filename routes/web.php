<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testController;
use Illuminate\Foundation\Application;
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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route Form
    Route::group(['prefix'=> '/form'], function () {

        //Route RPJMD
        Route::get('/rpjmd', function () {
            return Inertia::render('Rpjmd');
        })->name('form.rpjmd');

        //Route Analisis Masa Depan
        Route::get('/masa-depan', function () {
            return Inertia::render('MasaDepan');
        })->name('form.masa-depan');

        //Route Analisis Kesiapan
        Route::get('/kesiapan', function () {
            return Inertia::render('Kesiapan');
        })->name('form.kesiapan');

        //Route Analisis Kesenjangan
        Route::get('/kesenjangan', function () {
            return Inertia::render('Kesenjangan');
        })->name('form.kesenjangan');

        //Route GAP Indikator RPJMD
        Route::get('/gap-indikator-rpjmd', function () {
            return Inertia::render('GapIndikator');
        })->name('form.gap-indikator-rpjmd');

        //Route Analisis Swot/Twos
        Route::get('/swot', function () {
            return Inertia::render('Swot');
        })->name('form.swot');

        //Route Sasaran Pembangunan
        Route::get('/sasaran-pembangunan', function () {
            return Inertia::render('SasaranPembangunan');
        })->name('SasaranPembangunan');

        //Route Sasaran Pembangunan
        Route::get('/sasaran-pembangunan', function () {
            return Inertia::render('sasaran-pembangunan');
        })->name('form.sasaran-pembangunan');

        //Route Inventaris Invasi/Aplikasi
        Route::get('/inventaris-inovasi', function () {
            return Inertia::render('Inventaris');
        })->name('form.gap-indikator-rpjmd');
    });
});

require __DIR__.'/auth.php';
