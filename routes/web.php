<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\VestController;
use App\Http\Controllers\SponzorController;
use App\Http\Controllers\DiskusijaController;
use App\Http\Controllers\TableController;
use App\Http\Middleware\JeUrednik;






// Deo dashboarda ima admin, deo dashboarda ima urednik (neka ideja)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');






// Rute za profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





// Homepage
Route::get('/', [VestController::class, 'homepage'])->name('homepage');





// Kategorija list - šalje na prvu kategoriju single
Route::get('/kategorije', [KategorijaController::class, 'kategorije'])->name('kategorija.list');





// Kategorija single
Route::get('/kategorija/{id}', [KategorijaController::class, 'kategorijaById'])
    ->where('id', '[0-9]+')
    ->name('kategorija.singleById');
Route::get('/kategorija/{slug}', [KategorijaController::class, 'kategorija'])
    ->name('kategorija.single');





// Tim
Route::get('/tim', [TimController::class, 'tim'])->name('tim');





// Rute za kreiranje i unos vesti i komentara (potreban login)
Route::middleware('auth')->group(function () {
    Route::get('/vest/create', [VestController::class, 'novaVest'])->name('vest.create');
    Route::post('/vest/insert', [VestController::class, 'unosVest'])->name('vest.insert');
    Route::post('/komentar/{vest_id}', [KomentarController::class, 'unesiKomentar'])->name('komentar.unesi');
});




// Vest single
Route::get('/vest/{id}', [VestController::class, 'vestById'])
    ->where('id', '[0-9]+')
    ->name('vest.singleById');
Route::get('/vest/{slug}', [VestController::class, 'vest'])
    ->name('vest.single');






// ruta za ajax hvatanje tabela
Route::get('/fetch/{table}', [TableController::class, 'fetchTable']);


// ruta za ajax edit formu
Route::get('/fetch/{table}/{id}', [TableController::class, 'fetchEdit']);








// Resursne rute za ostale tabele (users, tims, sponzors, diskusijas, kategorijas, komentars)
Route::resource('users', ProfileController::class);
Route::resource('tims', TimController::class);
Route::resource('sponzors', SponzorController::class);
Route::resource('diskusijas', DiskusijaController::class);
Route::resource('kategorijas', KategorijaController::class);
Route::resource('komentars', KomentarController::class);



/*
middleware za urednika testing - RADI

Route::middleware(JeUrednik::class)->group(function () {
    Route::get('/vest/create', [VestController::class, 'novaVest'])->name('vest.create');
    Route::post('/vest/insert', [VestController::class, 'unosVest'])->name('vest.insert');
    Route::post('/komentar/{vest_id}', [KomentarController::class, 'unesiKomentar'])->name('komentar.unesi');
});
*/
