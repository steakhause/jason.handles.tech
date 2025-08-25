<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\N8nChatController;

Route::get('/', function () {
    $skills = SkillsController::data();
    return view('index', compact('skills'));
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';


use App\Http\Controllers\DocumentController;

Route::middleware(['auth'])->group(function () {
    Route::post('/documents/user-info', [DocumentController::class, 'storeUserInfo'])
        ->name('documents.userInfo.store');
});


Route::middleware(['auth'])->group(function () {
    Route::post('/n8n-chats', [N8nChatController::class, 'store'])
        ->name('n8n_chats.store');
});