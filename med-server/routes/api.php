<?php


use App\Http\Controllers\Api\AnalizatorController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\EquipmentController;
use App\Http\Controllers\Api\InteractionController;
use App\Http\Controllers\Api\ResearchController;
use App\Http\Controllers\Api\ResearchOrderController;
use App\Http\Controllers\Api\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/researches', [ResearchController::class, 'index'])->name('research.index');
Route::get('/researches/{research}', [ResearchController::class, 'show'])->name('research.show');
Route::post('/research', [ResearchController::class, 'store'])->name('research.store');
Route::put('/research/{research}', [ResearchController::class, 'update'])->name('research.update');


Route::get('/tests', [TestController::class, 'index'])->name('test.index');
Route::get('/tests/{research}', [TestController::class, 'show'])->name('test.show');
Route::post('/test', [TestController::class, 'store'])->name('test.store');
Route::put('/test/{research}', [TestController::class, 'update'])->name('test.update');

Route::get('/orders', [ResearchOrderController::class, 'index'])->name('order.index');
Route::get('/orders/{research_order}', [ResearchOrderController::class, 'show'])->name('order.show');
Route::post('/order', [ResearchOrderController::class, 'store'])->name('order.store');
Route::put('/order/{research}', [ResearchOrderController::class, 'update'])->name('order.update');


Route::get('/analizators', [AnalizatorController::class, 'index'])->name('analizator.index');
Route::get('/analizator/{analizator}', [AnalizatorController::class, 'show'])->name('analizator.show');
Route::post('/analizator', [AnalizatorController::class, 'store'])->name('analizator.store');
Route::put('/analizator/{analizator}', [AnalizatorController::class, 'update'])->name('analizator.update');

Route::get('/doctors', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/doctor/{doctor}', [DoctorController::class, 'show'])->name('doctor.show');
Route::post('/doctor', [DoctorController::class, 'store'])->name('doctor.store');
Route::put('/doctor/{doctor}', [DoctorController::class, 'update'])->name('doctor.update');

Route::get('/interactions', [InteractionController::class, 'index'])->name('interaction.index');
Route::get('/interaction/{interaction}', [InteractionController::class, 'show'])->name('interactionr.show');
Route::post('/interaction', [InteractionController::class, 'store'])->name('interaction.store');
Route::put('/interaction/{interaction}', [InteractionController::class, 'update'])->name('interaction.update');

Route::get('/equipments', [EquipmentController::class, 'index'])->name('equipment.index');
Route::get('/equipment/{equipment}', [EquipmentController::class, 'show'])->name('equipment.show');
Route::post('/equipment', [EquipmentController::class, 'store'])->name('equipment.store');
Route::put('/equipment/{equipment}', [EquipmentController::class, 'update'])->name('equipment.update');
// ...
