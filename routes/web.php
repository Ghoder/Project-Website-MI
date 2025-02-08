<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/register', [AuthController::class, 'showAdminRegisterForm'])->name('admin.register');
    Route::post('/admin/register', [AuthController::class, 'registerAdmin']);
});

Route::get('/pilihanlogin', function () {
    return view('auth.pilihanlogin');
})->name('pilihan.login');

Route::get('/admin/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login.post');
Route::get('/login', [AuthController::class, 'showUserLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'userLogin'])->name('login.post');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admindashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});