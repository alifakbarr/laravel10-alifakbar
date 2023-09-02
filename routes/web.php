<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin/layouts/master');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// portfolios 
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('admin.portfolio');
Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('admin.portfolio.create');
Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('admin.portfolio.store');
Route::get('/portfolio/edit', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
Route::post('/portfolio/update', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
Route::post('/portfolio/delete', [PortfolioController::class, 'delete'])->name('admin.portfolio.delete');
