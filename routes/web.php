<?php

use Illuminate\Support\Facades\{Route,Auth};
use App\Http\Controllers\ProgressTableController;
use App\Http\Controllers\RequestrepairController;
use App\Http\Controllers\SparepartrepairController;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');

Route::middleware('auth')->group(function() {
    Route::get('dashboard', function() {return view('dashboard');});
    Route::get('/sparepartrepair', [SparepartrepairController::class, 'index']);
    Route::get('/sparepartrepair/request', [SparepartrepairController::class, 'request']);
    Route::resource('/sparepartrepair/waitingtable', RequestrepairController::class);
    Route::resource('/sparepartrepair/progresstable', RequestrepairController::class);
    Route::get('/sparepartrepair/progresstable', [ProgressTableController::class, 'index']);

});
