<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParkingController;

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
    return view('auth.login');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('parking')->group(function () {
    Route::get('/dashboard',[ParkingController::class, 'index'])->name('parking.index');
    Route::get('/create',[ParkingController::class, 'create'])->name('parking.create');
    Route::post('/save',[ParkingController::class, 'store'])->name('parking.store');
    Route::put('/dashboard/{id}',[ParkingController::class, 'edit'])->name('parking.edit');
    Route::delete('/dashboard/{id}',[ParkingController::class, 'delete'])->name('parking.delete');
})
;

require __DIR__.'/auth.php';
