<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculeController;

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

Route::get('/', [GuestController::class, 'welcome'])->name('welcome');

Route::get('/contactez-nous', [GuestController::class, 'contact'])->name('contact');

Route::get('/nos-vehicules', [GuestController::class, 'cars'])->name('cars');

Route::middleware(['auth'])->group(function () {
    Route::get('/vehicule/reservation/{name}', [GuestController::class, 'reservation'])->name('cars.reservation');
    Route::post('/vehicule/reservation', [GuestController::class, 'sendReservation'])->name('cars.reservation.send');
    Route::get('/mes-locations', [GuestController::class, 'userLocations'])->name('user.locations');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/vehicules', VehiculeController::class);
    Route::resource('/clients', ClientController::class);
    Route::resource('/locations', LocationController::class);
});

require __DIR__.'/auth.php';
