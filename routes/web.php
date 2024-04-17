<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppicationController;
use App\Http\Controllers\ProfileController;
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

Route::get('dashboard', [AppicationController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('store', [AppicationController::class, 'store'])->name('application')->middleware(['auth', 'verified']);
Route::patch('update', [AppicationController::class, 'update'])->name('update')->middleware(['auth', 'verified']);

Route::middleware(['auth', 'verified'])->prefix('applications')->controller(AppicationController::class)->name('applications.')->group(function () {
    Route::post('accept', 'acceptAdmission')->name('accept');
    Route::delete('reject', 'rejectAdmission')->name('reject');
    Route::get('admission_letter', 'showAdmissionLetter')->name('admission');
    Route::get('admitted', 'admitted')->name('admitted');
    Route::get('{application}/edit', 'edit')->name('edit');
    Route::get('{application}/applied', 'applied')->name('applied');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('can:admin')->prefix('admin')->controller(AdminController::class)->name('admin.')->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
    Route::get('{application}/info', 'info')->name('info');
    Route::post('{id}/approve', 'approve')->name('approve');
    Route::delete('applications/{application}', 'destroy')->name('destroy');
});

require __DIR__.'/auth.php';
