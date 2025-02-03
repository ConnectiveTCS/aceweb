<?php

use App\Http\Controllers\ContactSubmissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PublicPageController;
use Illuminate\Support\Facades\Route;

// Remove the duplicate root route if present.
// Public pages using the PublicPageController
Route::get('/', [PublicPageController::class, 'home'])->name('home.public');
Route::get('/about', [PublicPageController::class, 'about'])->name('about.public');
Route::get('/projects', [PublicPageController::class, 'projects'])->name('projects.public');
Route::get('/project/{id}', [PublicPageController::class, 'projectDetails'])->name('project.details');
Route::get('/contact', [PublicPageController::class, 'contact'])->name('contact.public');

// Route for handling the contact form submission
Route::post('contact', [ContactSubmissionController::class, 'store']);

// Admin (authenticated) routes under the '/admin' prefix
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin routes for projects and reviews
    Route::resource('projects', ProjectController::class);
    Route::resource('reviews', ReviewController::class);

    Route::get('contact-submissions', [ContactSubmissionController::class, 'index'])->name('contact-submissions.index');
});

require __DIR__ . '/auth.php';
