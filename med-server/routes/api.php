<?php


use App\Http\Controllers\Api\ResearchController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\ResearchOrderController;
use Illuminate\Support\Facades\Route;


Route::get('/researches', [ResearchController::class, 'index'])->name('research.index');
Route::get('/researches/{research}', [ResearchController::class, 'show'])->name('research.show');
Route::post('/research', [ResearchController::class, 'store'])->name('research.store');
Route::put('/research/{research}', [ResearchController::class, 'update'])->name('research.update');


Route::get('/tests', [TestController::class, 'index'])->name('test.index');
Route::get('/tests/{research}', [TestController::class, 'show'])->name('test.show');
Route::post('/test', [TestController::class, 'store'])->name('test.store');
Route::put('/test/{research}', [TestController::class, 'update'])->name('test.update');

Route::get('/orders', [ResearchOrderController::class, 'index'])->name('test.index');
Route::get('/orders/{research_order}', [ResearchOrderController::class, 'show'])->name('test.show');
Route::post('/order', [ResearchOrderController::class, 'store'])->name('test.store');
Route::put('/order/{research}', [ResearchOrderController::class, 'update'])->name('test.update');

// ...
