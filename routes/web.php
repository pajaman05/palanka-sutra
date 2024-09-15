<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\VestController;

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







Route::post('/komentar/{vest_id}', [KomentarController::class, 'unesiKomentar'])->name('komentar.unesi');

Route::get('/tim', [TimController::class, 'tim'])->name('tim');


Route::get('/vest/create', [VestController::class, 'novaVest'])->name('vest.create');

// Nesto nije u redu, ili sa rutom ili sa kontrolerom, jer vesti ne stavlja u bazu
Route::post('/vest/insert', [VestController::class, 'unosVest'])->name('vest.insert');


// mladenov insert smatra drugacijim iz nekog razloga??
// Route::post('/vest/insert', [VestController::class, 'unosVest'])->name('vest.insert');

Route::get('/vest/{id}', [VestController::class, 'vestById'])
    ->where('id', '[0-9]+')
    ->name('vest.singleById');
Route::get('/vest/{slug}', [VestController::class, 'vest'])
    ->name('vest.single');