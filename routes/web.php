<?php

use App\Http\Controllers\TenantManageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TenantManageController::class, 'index'])->name('index');

Route::prefix('tenant/manage')->name('manage.')->group(function () {
    Route::get('create', [TenantManageController::class, 'create'])->name('tenant.create');
    Route::post('store', [TenantManageController::class, 'store'])->name('tenant.store');
});
