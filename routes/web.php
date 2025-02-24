<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Dashboard\CompanyProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [CompanyProfileController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/edit', [CompanyProfileController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/update/{companyProfile}', [CompanyProfileController::class, 'update'])->name('dashboard.update');

    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
