<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MachineController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\LocationController;


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function() {
    return view('start');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('machine/index', [MachineController::class, 'index'])
->name('machine.index');

Route::get('machine/create', [MachineController::class, 'create'])
->name('machine.create');

Route::post('machine', [MachineController::class, 'store'])
->name('machine.store');

Route::get('machine/show/{machine}', [MachineController::class, 'show'])
->name('machine.show');

Route::get('machine/edit/{machine}', [MachineController::class, 'edit'])
->name('machine.edit');

Route::patch('machine/{machine}', [MachineController::class, 'update'])
->name('machine.update');

Route::delete('machine/{machine}', [MachineController::class, 'destroy'])
->name('machine.destroy');

Route::get('manufacturer/index', [ManufacturerController::class, 'index'])
->name('manufacturer.index');

Route::get('manufacturer/create', [ManufacturerController::class, 'create'])
->name('manufacturer.create');

Route::post('manufacturer', [ManufacturerController::class, 'store'])
->name('manufacturer.store');

Route::get('manufacturer/show/{manufacturer}', [ManufacturerController::class, 'show'])
->name('manufacturer.show');

Route::get('manufacturer/edit/{manufacturer}', [ManufacturerController::class, 'edit'])
->name('manufacturer.edit');

Route::patch('manufacturer/{manufacturer}', [ManufacturerController::class, 'update'])
->name('manufacturer.update');

Route::delete('manufacturer/{manufacturer}', [ManufacturerController::class, 'destroy'])
->name('manufacturer.destroy');

Route::get('site/index', [SiteController::class, 'index'])
->name('site.index');

Route::get('site/create', [SiteController::class, 'create'])
->name('site.create');

Route::post('site', [SiteController::class, 'store'])
->name('site.store');

Route::get('site/show/{site}', [SiteController::class, 'show'])
->name('site.show');

Route::get('site/edit/{site}', [SiteController::class, 'edit'])
->name('site.edit');

Route::patch('site/{site}', [SiteController::class, 'update'])
->name('site.update');

Route::delete('site/{site}', [SiteController::class, 'destroy'])
->name('site.destroy');

Route::get('client/index', [ClientController::class, 'index'])
->name('client.index');

Route::get('client/create', [ClientController::class, 'create'])
->name('client.create');

Route::post('client', [ClientController::class, 'store'])
->name('client.store');

Route::get('client/show/{client}', [ClientController::class, 'show'])
->name('client.show');

Route::get('client/edit/{client}', [ClientController::class, 'edit'])
->name('client.edit');

Route::patch('client/{client}', [ClientController::class, 'update'])
->name('client.update');

Route::delete('client/{client}', [ClientController::class, 'destroy'])
->name('client.destroy');

Route::get('state/index', [StateController::class, 'index'])
->name('state.index');

Route::get('state/create', [StateController::class, 'create'])
->name('state.create');

Route::post('state', [StateController::class, 'store'])
->name('state.store');

Route::get('state/show/{state}', [StateController::class, 'show'])
->name('state.show');

Route::get('state/edit/{state}', [StateController::class, 'edit'])
->name('state.edit');

Route::patch('state/{state}', [StateController::class, 'update'])
->name('state.update');

Route::delete('state/{state}', [StateController::class, 'destroy'])
->name('state.destroy');

Route::get('location/index', [LocationController::class, 'index'])
->name('location.index');

Route::get('location/create', [LocationController::class, 'create'])
->name('location.create');

Route::post('location', [LocationController::class, 'store'])
->name('location.store');

Route::get('location/show/{location}', [LocationController::class, 'show'])
->name('location.show');

Route::get('location/edit/{location}', [LocationController::class, 'edit'])
->name('location.edit');

Route::patch('location/{location}', [LocationController::class, 'update'])
->name('location.update');

Route::delete('location/{location}', [LocationController::class, 'destroy'])
->name('location.destroy');

Route::get('history/index', [LocationController::class, 'index'])
->name('history.index');

Route::get('history/index_latest', [LocationController::class, 'index_latest'])
->name('history.index_latest');

Route::get('history/index_one_machine/{machine}', [LocationController::class, 'index_one_machine'])
->name('history.index_one_machine');

Route::get('history/create', [LocationController::class, 'create'])
->name('history.create');

Route::post('history', [LocationController::class, 'store'])
->name('history.store');

Route::get('history/show/{history}', [LocationController::class, 'show'])
->name('history.show');

Route::get('history/edit/{history}', [LocationController::class, 'edit'])
->name('history.edit');

Route::patch('history/{history}', [LocationController::class, 'update'])
->name('history.update');

Route::delete('history/{history}', [LocationController::class, 'destroy'])
->name('history.destroy');

Route::get('memo/index', [LocationController::class, 'index'])
->name('memo.index');

Route::get('memo/create', [LocationController::class, 'create'])
->name('memo.create');

Route::post('memo', [LocationController::class, 'store'])
->name('memo.store');

Route::get('memo/show/{memo}', [LocationController::class, 'show'])
->name('memo.show');

Route::get('memo/edit/{memo}', [LocationController::class, 'edit'])
->name('memo.edit');

Route::patch('memo/{memo}', [LocationController::class, 'update'])
->name('memo.update');

Route::delete('memo/{memo}', [LocationController::class, 'destroy'])
->name('memo.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
