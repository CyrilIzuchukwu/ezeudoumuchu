<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TributeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TributeController::class, 'tribute'])->name('tribute');
Route::post('/tribute-store', [TributeController::class, 'tributeStore'])->name('tribute.store');


Route::get('contact-us', [PageController::class, 'contact'])->name('contact.us');

Route::post('/contact-send', [ContactUsController::class, 'contactStore'])->name('contact.send');


Route::get('funeral-program', [PageController::class, 'funeralProgram'])->name('funeral.program');
