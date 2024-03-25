<?php

use App\Http\Controllers\Landlord\TenantManageController;
use App\Http\Controllers\Landlord\UserAuthController;
use App\Http\Controllers\Landlord\UserDashboardController;
use App\Http\Middleware\EnsureAuth;
use App\Http\Middleware\RedirectIfUnauthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', [TenantManageController::class, 'index'])->name('index');

Route::prefix('/')->name('landlord.auth.')->group(function () {
    Route::get('register', [UserAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [UserAuthController::class, 'submitRegisterForm']);

    Route::get('login', [UserAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [UserAuthController::class, 'submitLoginForm']);

    Route::get('logout', [UserAuthController::class, 'logout'])->name('logout');
});

Route::prefix('dashboard')->name('landlord.')->middleware(RedirectIfUnauthenticated::class)->group(function () {
    Route::get('/', [UserDashboardController::class, 'dashboard'])->name('user.dashboard');

    Route::prefix('tenant')->name('manage.')->group(function () {
        Route::get('create', [TenantManageController::class, 'create'])->name('tenant.create');
        Route::post('store', [TenantManageController::class, 'store'])->name('tenant.store');
    });
});
