<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Models\ProblemImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


Route::middleware('auth')->group(function () {
    Route::controller(ProblemController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/completed', 'completed')->name('problem.completed');
        Route::get('/search', 'search')->name('problem.search');
        Route::get('/problem/create', 'create')->name('problem.create');
        Route::post('/problem', 'store')->name('problem.store');
        Route::get('/problem/{problem}/edit', 'edit')->name('problem.edit');
        Route::patch('/problem/{problem}', 'update')->name('problem.update');
        Route::delete('/problem/{problem}', 'delete')->name('problem.delete');
        Route::controller(ReportController::class)->prefix('reports')->group(function () {
            Route::get('/', 'index')->name('report.index');
            Route::get('/{problem}/create', 'create')->name('report.create');
            Route::post('/{problem}/store', 'store')->name('report.store');
            Route::get('/{report}/show', 'show')->name('report.show');
//            Route::get('/{report}/edit', 'edit')->name('report.edit');
//            Route::patch('/{report}', 'update')->name('report.update');
        });
        Route::controller(DocumentController::class)->prefix('documents')->group(function () {
            Route::get('/', 'index')->name('document.index');
            Route::get('/create', 'create')->name('document.create');
            Route::post('/', 'store')->name('document.store');
            Route::get('/{document}/show', 'show')->name('document.show');
        });
        Route::controller(ProfileController::class)->prefix('profile')->group(function () {
            Route::get('/{user}/edit', 'edit')->name('profile.edit');
            Route::patch('/{user}/update', 'update')->name('profile.update');
        });
        Route::controller(AdminController::class)->prefix('admin')->group(function () {
            Route::get('/', 'index')->name('admin.index');
            Route::controller(AdminUserController::class)->prefix('users')->group(function () {
                Route::get('/', 'index')->name('admin.user.index');
                Route::get('/create', 'create')->name('admin.user.create');
                Route::post('/', 'store')->name('admin.user.store');
                Route::get('/{user}/edit', 'edit')->name('admin.user.edit');
                Route::patch('/{user}/update', 'update')->name('admin.user.update');
                Route::delete('/{user}', 'delete')->name('admin.user.delete');
            });
        });
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


