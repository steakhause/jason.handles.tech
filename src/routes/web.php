<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\N8nChatController;
use App\Http\Controllers\DocumentController;

// ---------- Public Routes ----------
Route::get('/', function () {
    $skills = SkillsController::data();
    return view('index', compact('skills'));
})->name('index');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');





// ---------- Authenticated Routes ----------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::view('/resume-builder', 'dashboard')->name('resume.builder');

    Route::post('/documents/user-info', [DocumentController::class, 'storeUserInfo'])
        ->name('documents.userInfo.store');
        
    Route::post('/n8n-chats', [N8nChatController::class, 'store'])
        ->name('n8n_chats.store');


    // ---------- Auth + Verified Routes ----------
    Route::middleware(['verified'])->group(function () {});
});
require __DIR__ . '/auth.php';

