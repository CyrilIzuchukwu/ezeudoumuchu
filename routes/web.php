<?php

use App\Http\Controllers\Admin\AdminEulogyController;
use App\Http\Controllers\Admin\AdminTributeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TributeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [TributeController::class, 'tribute'])->name('tribute');



Route::post('/tribute-store', [TributeController::class, 'tributeStore'])->name('tribute.store');


Route::get('contact-us', [PageController::class, 'contact'])->name('contact.us');

Route::post('/contact-send', [ContactUsController::class, 'contactStore'])->name('contact.send');


Route::get('funeral-program', [PageController::class, 'funeralProgram'])->name('funeral.program');

Route::get('scheme/qr-code', [PageController::class, 'qrCode'])->name('funeral.qrcode');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

    // Show the tribute upload form
    Route::get('/tributes/upload', [AdminTributeController::class, 'showUploadForm'])->name('admin.tributes.upload');

    // Store tribute
    Route::post('/tributes/upload', [AdminTributeController::class, 'storeTribute'])->name('admin.tributes.store');



    Route::prefix('eulogy')->group(function () {
        Route::get('/', [AdminEulogyController::class, 'index'])->name('admin.eulogy.index');
        // Show the eulogy upload form
        Route::get('/upload', [AdminEulogyController::class, 'showUploadForm'])->name('admin.eulogy.upload');
        // Store eulogy
        Route::post('/upload', [AdminEulogyController::class, 'storeEulogy'])->name('admin.eulogy.store');
        Route::get('/{eulogy}/edit', [AdminEulogyController::class, 'edit'])->name('admin.eulogy.edit');
        Route::put('/{eulogy}', [AdminEulogyController::class, 'update'])->name('admin.eulogy.update');
        Route::delete('/{eulogy}', [AdminEulogyController::class, 'destroy'])->name('admin.eulogy.destroy');
    });
});
