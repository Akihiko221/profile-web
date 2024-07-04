<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GearController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('index');
});

Route::get('/gear', [GearController::class, 'index'])->name('gears.index');

Route::get('/content', [ContentController::class, 'index'])->name('content.index');

// Rute untuk Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Rute untuk halaman gear di dalam dashboard
Route::get('/dashboard/gear', [DashboardController::class, 'gearIndex'])->name('dashboard.gear.index');
Route::get('/dashboard/gear/create', [DashboardController::class, 'gearCreate'])->name('dashboard.gear.create');
Route::post('/dashboard/gear/store', [DashboardController::class, 'gearStore'])->name('dashboard.gear.store');
Route::get('/dashboard/gear/{id}', [DashboardController::class, 'gearShow'])->name('dashboard.gear.show');
Route::get('/dashboard/gear/{id}/edit', [DashboardController::class, 'gearEdit'])->name('dashboard.gear.edit');
Route::post('/dashboard/gear/{id}/update', [DashboardController::class, 'gearUpdate'])->name('dashboard.gear.update');
Route::delete('/dashboard/gear/{id}', [DashboardController::class, 'gearDestroy'])->name('dashboard.gear.destroy');

// Rute untuk mengelola link YouTube di dalam dashboard
Route::get('/dashboard/youtube', [DashboardController::class, 'youtubeIndex'])->name('dashboard.youtube.index');
Route::get('/dashboard/youtube/edit', [DashboardController::class, 'youtubeEdit'])->name('dashboard.youtube.edit');
Route::post('/dashboard/youtube/update', [DashboardController::class, 'youtubeUpdate'])->name('dashboard.youtube.update');

