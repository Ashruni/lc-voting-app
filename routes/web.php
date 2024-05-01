<?php

use app\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [IdeaController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::view('/show','idea');
Route::get('/idea/{idea:slug}',[IdeaController::class,'show'])->name('idea');

require __DIR__.'/auth.php';
