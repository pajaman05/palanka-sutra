<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\VestController;

Route::get('/', function () {
    return view('welcome');
});

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
    ->name('kategorija.single.by.id');

    
Route::get('/kategorija/{slug}', [KategorijaController::class, 'kategorija'])
    ->name('kategorija.single');




//Mladen :3

Route::get('/vest/create', [VestController::class, 'novaVest'])->name('vest.create');

Route::post('/vest/insert', [VestController::class, 'unosVest'])->name('vest.insert');  


Route::get('/vest/{slug}', [VestController::class, 'vest'])->name('vest.single');