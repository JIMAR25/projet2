<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ArgentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/temoignages', [TemoignageController::class, 'index'])->name('temoignages.index');
Route::get('/temoignages/create', [TemoignageController::class, 'create'])->name('temoignages.create');
Route::post('/temoignages', [TemoignageController::class, 'store'])->name('temoignages.store');
Route::delete('/temoignages/{id}', [TemoignageController::class, 'destroy'])->name('temoignages.destroy');


Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::post('/services/{service}/donors', [App\Http\Controllers\ServiceController::class, 'addDonor'])->name('services.addDonor');


Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');
Route::get('/donations/argents/create', function () {
    return view('donations.argents.create');
})->name('argent');

Route::get('/paiement/create', [DonationController::class, 'create'])->name('paiement.create');
Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');


Route::get('/donations/alimentations/create', function () {
    return view('donations.alimentations.create');
})->name('alimentations');

Route::get('/donations/meubles/create', function () {
    return view('donations.meubles.create');
})->name('meubles');

Route::get('/donations/scolaires/create', function () {
    return view('donations.scolaires.create');
})->name('scolaires');

Route::get('/donations/vetements/create', function () {
    return view('donations.vetements.create');
})->name('vetements');

Route::get('/donations/autres/create', function () {
    return view('donations.autres.create');
})->name('autres');










require __DIR__.'/auth.php';
