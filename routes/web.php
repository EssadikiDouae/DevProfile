<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route principale du tableau de bord
Route::get('/', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Routes protégées par authentification
Route::middleware(['auth'])->group(function () {
    // Gestion du profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Projets et compétences
    Route::resource('projects', ProjectController::class);
    Route::resource('skills', SkillController::class);

    // Génération PDF
    Route::get('/pdf/{username}', [PDFController::class, 'generate'])->name('pdf.generate');

    // 🔹 Routes pour la gestion des utilisateurs (ajout d'un utilisateur)
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
});

// Profil public (accessible sans authentification)
Route::get('/profile/{username}', [PublicProfileController::class, 'show'])->name('profile.show');

// Auth
require __DIR__.'/auth.php';

