<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DiagnosticAdminController;
use App\Http\Controllers\Admin\PeriodAdminController;
use App\Http\Controllers\Admin\ReasonAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserDocumentController;
use Illuminate\Support\Facades\Auth;
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


Route::middleware('auth')->group(function () {
    Route::controller(ProblemController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/completed', 'completed')->name('problem.completed');
        Route::get('/search', 'search')->name('problem.search');
        Route::get('/problem/create', 'create')->name('problem.create');
        Route::post('/problem', 'store')->name('problem.store');
        Route::post('/problem/{problem}/work', 'work')->name('problem.work');
        Route::get('/problem/{problem}/edit', 'edit')->name('problem.edit');
        Route::get('/problem/{problem}/show', 'show')->name('problem.show');
        Route::patch('/problem/{problem}', 'update')->name('problem.update');
        Route::delete('/problem/{problem}', 'delete')->name('problem.delete');
        Route::controller(ReportController::class)->prefix('reports')->group(function () {
            Route::get('/', 'index')->name('report.index');
            Route::get('/{problem}/create', 'create')->name('report.create');
            Route::post('/{problem}/store', 'store')->name('report.store');
            Route::get('/{problem}/show', 'show')->name('report.show');
            Route::get('/{problem}/pdf', 'pdf')->name('report.pdf');
//            Route::get('/{report}/edit', 'edit')->name('report.edit');
//            Route::patch('/{report}', 'update')->name('report.update');
        });
        Route::controller(DocumentController::class)->prefix('documents')->group(function () {
            Route::get('/', 'index')->name('document.index');
            Route::get('/create', 'create')->name('document.create');
            Route::post('/', 'store')->name('document.store');
            Route::get('/{document}/edit', 'edit')->name('document.edit');
            Route::get('/{document}/show', 'show')->name('document.show');
            Route::delete('/{document}/delete', 'delete')->name('document.delete');
//            Route::prefix('files')->group(function () {
//                Route::get('/{document}', 'createFile')->name('document.file.create');
//                Route::post('/{document}', 'storeFile')->name('document.file.store');
//                Route::delete('/{file}', 'deleteFile')->name('document.file.delete');
//            });
        });
        Route::controller(ProfileController::class)->prefix('profile')->group(function () {
            Route::get('/{user}/edit', 'edit')->name('profile.edit');
            Route::patch('/{user}/update', 'update')->name('profile.update');
        });
        Route::controller(AdminController::class)->prefix('admin')->group(function () {
            Route::get('/', 'index')->name('admin.index');
            Route::controller(UserAdminController::class)->prefix('users')->group(function () {
                Route::get('/', 'index')->name('admin.user.index');
                Route::get('/create', 'create')->name('admin.user.create');
                Route::post('/', 'store')->name('admin.user.store');
                Route::get('/{user}/edit', 'edit')->name('admin.user.edit');
                Route::patch('/{user}/update', 'update')->name('admin.user.update');
                Route::delete('/{user}', 'delete')->name('admin.user.delete');
            });
            Route::controller(ReasonAdminController::class)->prefix('reasons')->group(function () {
                Route::get('/', 'index')->name('admin.reason.index');
                Route::get('/create', 'create')->name('admin.reason.create');
                Route::post('/', 'store')->name('admin.reason.store');
                Route::get('/{reason}/edit', 'edit')->name('admin.reason.edit');
                Route::patch('/{reason}/update', 'update')->name('admin.reason.update');
                Route::delete('/{reason}', 'delete')->name('admin.reason.delete');
            });
            Route::controller(DiagnosticAdminController::class)->prefix('diagnostics')->group(function () {
                Route::get('/', 'index')->name('admin.diagnostic.index');
                Route::get('/{user}/{period}/create', 'create')->name('admin.diagnostic.create');
                Route::post('/{user}/{period}/store', 'store')->name('admin.diagnostic.store');
                Route::get('/{diagnostic}/show', 'show')->name('admin.diagnostic.show');
                Route::get('/{diagnostic}/pdf', 'pdf')->name('admin.diagnostic.pdf');
//                Route::get('/{reason}/edit', 'edit')->name('admin.reason.edit');
//                Route::patch('/{reason}/update', 'update')->name('admin.reason.update');
                Route::delete('/{diagnostic}', 'delete')->name('admin.diagnostic.delete');
                Route::controller(PeriodAdminController::class)->prefix('periods')->group(function () {
                    Route::get('/', 'index')->name('admin.diagnostic.period.index');
                Route::get('/create', 'create')->name('admin.diagnostic.period.create');
                    Route::get('/{period}/show', 'show')->name('admin.diagnostic.period.show');
                Route::delete('/{period}', 'delete')->name('admin.diagnostic.period.delete');

                });
            });
        });
    });
    Route::controller(UserDocumentController::class)->prefix('user-documents')->group(function () {
        Route::get('/users', 'index')->name('userdocument.index');
        Route::get('/{user}/edit', 'edit')->name('userdocument.edit');
        Route::patch('/{user}/update', 'update')->name('userdocument.update');
        Route::delete('/{document}/delete', 'delete')->name('userdocument.delete');
    });
    Route::controller(NotificationController::class)->prefix('notifications')->group(function () {
        Route::get('/', 'index')->name('notification.index');
        Route::get('/readAll', 'readAll')->name('notification.readAll');
    });

});
Route::controller(DemoController::class)->prefix('demo')->group(function () {
    Route::get('/pdf', 'demo');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


