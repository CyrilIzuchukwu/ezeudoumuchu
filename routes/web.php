<?php

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

    // Store tribute image
    Route::post('/tributes/upload', [AdminTributeController::class, 'storeTribute'])->name('admin.tributes.store');
});
