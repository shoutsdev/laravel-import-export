<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\ExcelController::class,'index']);
Route::get('export', [\App\Http\Controllers\ExcelController::class,'export'])->name('export');
Route::post('import', [\App\Http\Controllers\ExcelController::class,'import'])->name('import');
