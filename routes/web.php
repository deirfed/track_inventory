<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\DefectController;
use App\Http\Controllers\MainlineController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailPartController;
use App\Http\Controllers\TransDefectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::controller(DashboardController::class)->group(function () {
    // Route::get('/home', 'index')->name('home');
    Route::get('/', 'login')->name('login');
    Route::get('/transisi', 'transisi')->name('transisi');
    Route::get('/dashboard', 'index')->name('home');
});

Route::controller(AreaController::class)->group(function () {
    Route::get('/area', 'index')->name('area.index');
    Route::get('/area-create', 'create')->name('area.create');
    Route::post('/area', 'store')->name('area.store');
    Route::get('/area/{id}/edit', 'edit')->name('area.edit');
    Route::put('/area', 'update')->name('area.update');
    Route::get('/area/{id}/delete', 'destroy')->name('area.delete');
});

Route::controller(LineController::class)->group(function () {
    Route::get('/line', 'index')->name('line.index');
    Route::get('/line-create', 'create')->name('line.create');
    Route::post('/line', 'store')->name('line.store');
    Route::get('/line/{id}/edit', 'edit')->name('line.edit');
    Route::put('/line', 'update')->name('line.update');
    Route::get('/line/{id}/delete', 'destroy')->name('line.delete');
});

Route::controller(PartController::class)->group(function () {
    Route::get('/part', 'index')->name('part.index');
    Route::get('/part-create', 'create')->name('part.create');
    Route::post('/part', 'store')->name('part.store');
    Route::get('/part/{id}/edit', 'edit')->name('part.edit');
    Route::put('/part', 'update')->name('part.update');
    Route::get('/part/{id}/delete', 'destroy')->name('part.delete');
});


Route::controller(DetailPartController::class)->group(function () {
    Route::get('/detail-part', 'index')->name('detail-part.index');
    Route::get('/detail-part-create', 'create')->name('detail-part.create');
    Route::post('/detail-part', 'store')->name('detail-part.store');
    Route::get('/detail-part/{id}/edit', 'edit')->name('detail-part.edit');
    Route::put('/detail-part', 'update')->name('detail-part.update');
    Route::get('/detail-part/{id}/delete', 'destroy')->name('detail-part.delete');
});

Route::controller(DefectController::class)->group(function () {
    Route::get('/defect', 'index')->name('defect.index');
    Route::get('/defect-create', 'create')->name('defect.create');
    Route::post('/defect', 'store')->name('defect.store');
    Route::get('/defect/{id}/edit', 'edit')->name('defect.edit');
    Route::put('/defect', 'update')->name('defect.update');
    Route::get('/defect/{id}/delete', 'destroy')->name('defect.delete');
});

Route::controller(TransDefectController::class)->group(function () {
    Route::get('/TransDefect', 'index')->name('transDefect.index');
    Route::get('/TransDefect-create', 'create')->name('transDefect.create');
    Route::post('/TransDefect', 'store')->name('transDefect.store');
    Route::get('/TransDefect/{id}/edit', 'edit')->name('transDefect.edit');
    Route::put('/TransDefect', 'update')->name('transDefect.update');

    // Import Trans Part & Defect
    Route::post('/TransDefect/import', 'import')->name('transDefect.import');
});

Route::controller(MainlineController::class)->group(function () {
    Route::get('/mainline', 'index')->name('mainline.index');
    Route::get('/mainline-create', 'create')->name('mainline.create');
    Route::post('/mainline', 'store')->name('mainline.store');
    Route::get('/mainline/{id}/edit', 'edit')->name('mainline.edit');
    Route::put('/mainline', 'update')->name('mainline.update');
    Route::get('/mainline/{id}/delete', 'destroy')->name('mainline.delete');

    // SPAN atau TRACK BED
    Route::post('/mainline/import', 'import')->name('mainline.import');
    Route::get('/mainline/export', 'export')->name('mainline.export');
    Route::get('/mainline/json', 'getJson')->name('mainline.json');
});
