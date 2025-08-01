<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;

Route::get('/', function () {
    $skills = SkillsController::data();
    return view('index', compact('skills'));
});

Route::redirect('/portfolio', '/');

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/about', function () {
    return "Coming soon!";
})->name('about');

Route::get('/zoom', function () {
    return redirect()->away(config('services.zoom.url'));
})->name('zoom.redirect');

Route::get('/linkedin', function () {
    return redirect()->away(config('services.linkedin.url'));
})->name('linkedin.redirect');