<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\RuleController;

// Public Routes
Route::get('/', [TestController::class, 'welcome'])->name('home');
Route::get('/test', [TestController::class, 'start'])->name('test.start');
Route::post('/test/process', [TestController::class, 'process'])->name('test.process');
Route::get('/test/result/{session}', [TestController::class, 'result'])->name('test.result');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes (Require Authentication)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // CRUD Majors
    Route::resource('/majors', MajorController::class)->except(['show']);
    
    // CRUD Questions
    Route::resource('/questions', QuestionController::class)->except(['show']);
    
    // CRUD Rules
    Route::resource('/rules', RuleController::class)->except(['show', 'create', 'edit']);
});