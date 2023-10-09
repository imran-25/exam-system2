<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionBankController;
use App\Http\Controllers\SubjectController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('subjects', SubjectController::class);
Route::resources([
    'subjects' => SubjectController::class,
    'levels' => LevelController::class,
    'questionbanks' => QuestionBankController::class
]);

require __DIR__ . '/auth.php';