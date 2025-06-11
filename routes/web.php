<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// 🔹 Frontend Routes
Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

// 🔹 Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 🔹 Admin Dashboard (Only for Admins)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // ✅ Fix: Add Feedbacks Route
    Route::get('/admin/feedbacks', [FeedbackController::class, 'index'])->name('admin.feedbacks');
});

// 🔹 User Dashboard (Only for Authenticated Users)
Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});

// 🔹 Feedback Submission
Route::post('/feedback', [FeedbackController::class, 'store']);

// 🔹 Contact Form Submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
