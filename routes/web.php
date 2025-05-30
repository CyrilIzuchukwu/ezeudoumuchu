<?php

use App\Http\Controllers\TributeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TributeController::class, 'tribute'])->name('tribute');
Route::post('/tribute-store', [TributeController::class, 'tributeStore'])->name('tribute.store');


