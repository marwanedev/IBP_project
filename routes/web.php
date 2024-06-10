<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;

Route::middleware(['auth', 'role:Administrator'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/users', AdminController::class);
    Route::get('/admin/messages', [AdminController::class, 'messages'])->name('admin.messages');
});

Route::middleware(['auth', 'role:Standard User'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user/announcements', [UserController::class, 'announcements'])->name('user.announcements');
    Route::get('/user/messages', [UserController::class, 'createMessage'])->name('user.messages.create');
    Route::post('/user/messages', [UserController::class, 'storeMessage'])->name('user.messages.store');
});

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

require __DIR__.'/auth.php';
