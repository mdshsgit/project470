<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\WorkspaceController;

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

require __DIR__ . '/auth.php';

// Workspace route
Route::get('/workspace', function () {
    return view('workspace');
})->name('workspace');

Route::post('/groups', [GroupController::class, 'store'])->name('groups.store');

Route::get('/workspace', [GroupController::class, 'index'])->name('workspace');

Route::get('/groups/{id}', [GroupController::class, 'show'])->name('groups.show');

Route::middleware('auth')->group(function () {
    Route::post('/groups/{id}/chat', [ChatController::class, 'sendMessage']);
});

Route::delete('groups/{group}/leave', [GroupController::class, 'leave'])->name('groups.leave');

Route::get('/workspace', [WorkspaceController::class, 'index'])->name('workspace');
