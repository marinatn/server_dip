<?php


use App\Http\Controllers\Api\AnalizatorController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\EquipmentController;
use App\Http\Controllers\Api\InteractionController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\PointController;
use App\Http\Controllers\Api\ResearchController;
use App\Http\Controllers\Api\ResearchOrderController;
use App\Http\Controllers\Api\SampleController;
use App\Http\Controllers\Api\BiomaterialController;
use App\Http\Controllers\Api\ContainerController;
use App\Http\Controllers\Api\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/researches', [ResearchController::class, 'index'])->name('research.index');
Route::get('/researches/{research}', [ResearchController::class, 'show'])->name('research.show');
Route::post('/research', [ResearchController::class, 'store'])->name('research.store');
Route::put('/research/{research}', [ResearchController::class, 'update'])->name('research.update');
Route::delete('/research/{research}', [ResearchController::class, 'destroy'])->name('research.destroy');

Route::get('/tests', [TestController::class, 'index'])->name('test.index');
Route::get('/tests/{test}', [TestController::class, 'show'])->name('test.show');
Route::post('/test', [TestController::class, 'store'])->name('test.store');
Route::put('/test/{test}', [TestController::class, 'update'])->name('test.update');
Route::delete('/test/{test}', [TestController::class, 'destroy'])->name('test.destroy');

Route::get('/orders', [ResearchOrderController::class, 'index'])->name('order.index');
Route::get('/orders/{research_order}', [ResearchOrderController::class, 'show'])->name('order.show');
Route::post('/order', [ResearchOrderController::class, 'store'])->name('order.store');
Route::put('/order/{research_order}', [ResearchOrderController::class, 'update'])->name('order.update');
Route::delete('/order/{research_order}', [ResearchOrderController::class, 'destroy'])->name('order.destroy');

Route::get('/analizators', [AnalizatorController::class, 'index'])->name('analizator.index');
Route::get('/analizator/{analizator}', [AnalizatorController::class, 'show'])->name('analizator.show');
Route::post('/analizator', [AnalizatorController::class, 'store'])->name('analizator.store');
Route::put('/analizator/{analizator}', [AnalizatorController::class, 'update'])->name('analizator.update');
Route::delete('/analizator/{analizator}', [AnalizatorController::class, 'destroy'])->name('analizator.destroy');

Route::get('/doctors', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/doctor/{doctor}', [DoctorController::class, 'show'])->name('doctor.show');
Route::post('/doctor', [DoctorController::class, 'store'])->name('doctor.store');
Route::put('/doctor/{doctor}', [DoctorController::class, 'update'])->name('doctor.update');
Route::delete('/doctor/{doctor}', [DoctorController::class, 'destroy'])->name('doctor.destroy');

Route::get('/interactions', [InteractionController::class, 'index'])->name('interaction.index');
Route::get('/interaction/{interaction}', [InteractionController::class, 'show'])->name('interactionr.show');
Route::post('/interaction', [InteractionController::class, 'store'])->name('interaction.store');
Route::put('/interaction/{interaction}', [InteractionController::class, 'update'])->name('interaction.update');

Route::get('/equipments', [EquipmentController::class, 'index'])->name('equipment.index');
Route::get('/equipment/{equipment}', [EquipmentController::class, 'show'])->name('equipment.show');
Route::post('/equipment', [EquipmentController::class, 'store'])->name('equipment.store');
Route::put('/equipment/{equipment}', [EquipmentController::class, 'update'])->name('equipment.update');

Route::get('/points', [PointController::class, 'index'])->name('point.index');
Route::get('/point/{point}', [PointController::class, 'show'])->name('point.show');
Route::post('/point', [PointController::class, 'store'])->name('point.store');
Route::put('/point/{point}', [PointController::class, 'update'])->name('point.update');

Route::get('/biomaterials', [BiomaterialController::class, 'index'])->name('biomaterial.index');
Route::get('/biomaterial/{biomaterial}', [BiomaterialController::class, 'show'])->name('biomaterial.show');
Route::post('/biomaterial', [BiomaterialController::class, 'store'])->name('biomaterial.store');
Route::put('/biomaterial/{biomaterial}', [BiomaterialController::class, 'update'])->name('biomaterial.update');

Route::get('/containers', [ContainerController::class, 'index'])->name('container.index');
Route::get('/container/{container}', [ContainerController::class, 'show'])->name('container.show');
Route::post('/container', [ContainerController::class, 'store'])->name('container.store');
Route::put('/container/{container}', [ContainerController::class, 'update'])->name('container.update');

Route::get('/samples', [SampleController::class, 'index'])->name('sample.index');
Route::get('/sample/{sample}', [SampleController::class, 'show'])->name('sample.show');
Route::post('/sample', [SampleController::class, 'store'])->name('sample.store');
Route::put('/sample/{sample}', [SampleController::class, 'update'])->name('sample.update');
// ...


Route::get('/patients', [PatientController::class, 'index'])->name('patient.index');
Route::get('/patient/{patient}', [PatientController::class, 'show'])->name('patient.show');
Route::post('/patient', [PatientController::class, 'store'])->name('patient.store');
Route::put('/patient/{patient}', [PatientController::class, 'update'])->name('patient.update');
