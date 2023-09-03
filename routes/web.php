<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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
Route::get('/portfolio/show/{id}', [PortfolioController::class, 'show'])->name('admin.portfolio.show');
Route::get('/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
Route::post('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
Route::post('/portfolio/destroy/{id}', [PortfolioController::class, 'destroy'])->name('admin.portfolio.destroy');

// categories 
Route::get('/categories', [CategoriesController::class, 'index'])->name('admin.categories');
Route::get('/categories/create', [CategoriesController::class, 'create'])->name('admin.categories.create');
Route::post('/categories/store', [CategoriesController::class, 'store'])->name('admin.categories.store');
Route::get('/categories/show/{id}', [CategoriesController::class, 'show'])->name('admin.categories.show');
Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('admin.categories.edit');
Route::post('/categories/update/{id}', [CategoriesController::class, 'update'])->name('admin.categories.update');
Route::post('/categories/destroy/{id}', [CategoriesController::class, 'destroy'])->name('admin.categories.destroy');

// home
Route::get('home/portfolio', [HomeController::class, 'portfolio'])->name('home.portfolio');
