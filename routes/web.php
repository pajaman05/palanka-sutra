<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\VestController;
use App\Http\Controllers\SponzorController;
use App\Http\Middleware\JeUrednik;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




//DUNJIC RUTE ZA KONTROLERE

Route::get('/', [VestController::class, 'homepage'])->name('homepage');



Route::get('/kategorije', [KategorijaController::class, 'kategorije'])->name('kategorija.list');



Route::get('/kategorija/{id}', [KategorijaController::class, 'kategorijaById'])
    ->where('id', '[0-9]+')
    ->name('kategorija.singleById');    
Route::get('/kategorija/{slug}', [KategorijaController::class, 'kategorija'])
    ->name('kategorija.single');









Route::get('/tim', [TimController::class, 'tim'])->name('tim');

Route::get('/sponzori', [SponzorController::class, 'sponzori'])->name('sponzori');


Route::middleware('auth')->group(function () {
    Route::get('/vest/create', [VestController::class, 'novaVest'])->name('vest.create');
    Route::post('/vest/insert', [VestController::class, 'unosVest'])->name('vest.insert');
    Route::post('/komentar/{vest_id}', [KomentarController::class, 'unesiKomentar'])->name('komentar.unesi');
});


/*
middleware za urednika testing - RADI

Route::middleware(JeUrednik::class)->group(function () {
    Route::get('/vest/create', [VestController::class, 'novaVest'])->name('vest.create');
    Route::post('/vest/insert', [VestController::class, 'unosVest'])->name('vest.insert');
    Route::post('/komentar/{vest_id}', [KomentarController::class, 'unesiKomentar'])->name('komentar.unesi');
});
*/

Route::get('/vest/{id}', [VestController::class, 'vestById'])
    ->where('id', '[0-9]+')
    ->name('vest.singleById');
Route::get('/vest/{slug}', [VestController::class, 'vest'])
    ->name('vest.single');