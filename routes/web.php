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


/////////////////////////////////////////////////////////////////////////////

Route::get('article/create', [ArticleController::class, 'create'])
->name('article.create');

Route::post('article', [ArticleController::class, 'store'])
->name('article.store');

Route::get('article', [ArticleController::class, 'index'])
->name('article.index');

Route::get('article/show/{article}', [ArticleController::class, 'show'])
->name('article.show');

Route::get('article/{article}/edit', [ArticleController::class, 'edit'])
->name('article.edit');

Route::patch('article/{article}', [ArticleController::class, 'update'])
->name('article.update');

Route::delete('article/{article}', [ArticleController::class, 'destroy'])
->name('article.destroy');

Route::get('check', [CheckController::class, 'index'])
->name('check.index');

Route::get('check/create', [CheckController::class, 'create'])
->name('check.create');

Route::post('check', [CheckController::class, 'store'])
->name('check.store');

Route::get('check/show/{check}', [CheckController::class, 'show'])
->name('check.show');

Route::get('check/show_checked/{check}', [CheckController::class, 'showChecked'])
->name('check.show_checked');

Route::get('check/confirm/{check}', [CheckController::class, 'confirmEdit'])
->name('check.confirm_edit');

Route::patch('check/confirm/{check}', [CheckController::class, 'confirm'])
->name('check.confirm');

Route::get('check/cancel/{check}', [CheckController::class, 'cancel'])
->name('check.cancel');

Route::get('check/delete/{check}', [CheckController::class, 'deleteEdit'])
->name('check.delete_edit');

Route::delete('check/{check}', [CheckController::class, 'destroy'])
->name('check.destroy');

Route::patch('check/{check}/inventory', [InventoryController::class, 'update'])
->name('inventory.update');

Route::get('inventory/latest_state', [InventoryController::class, 'latestState'])
->name('inventory.latest_state');

Route::get('csv', function () {
    return view('csv.index');
})
->name('csv.index');

Route::post('article/csv_import', [ArticleController::class, 'csvImport'])
->name('article.csv_import');

Route::get('check/order/index', [CheckController::class, 'orderIndex'])
->name('check.order_index');

Route::get('check/order/show/{check}', [CheckController::class, 'orderShow'])
->name('check.order_show');


Route::get('category/create', [CategoryController::class, 'create'])
->name('category.create');

Route::post('category', [CategoryController::class, 'store'])
->name('category.store');

Route::get('category', [CategoryController::class, 'index'])
->name('category.index');

Route::get('category/show/{category}', [CategoryController::class, 'show'])
->name('category.show');

Route::get('category/edit/{category}', [CategoryController::class, 'edit'])
->name('category.edit');

Route::patch('category/{category}', [CategoryController::class, 'update'])
->name('category.update');

Route::delete('category/{category}', [CategoryController::class, 'destroy'])
->name('category.destroy');


Route::get('place/create', [PlaceController::class, 'create'])
->name('place.create');

Route::post('place', [PlaceController::class, 'store'])
->name('place.store');

Route::get('place', [PlaceController::class, 'index'])
->name('place.index');

Route::get('place/show/{place}', [PlaceController::class, 'show'])
->name('place.show');

Route::get('place/edit/{place}', [PlaceController::class, 'edit'])
->name('place.edit');

Route::patch('place/{place}', [PlaceController::class, 'update'])
->name('place.update');

Route::delete('place/{place}', [PlaceController::class, 'destroy'])
->name('place.destroy');


Route::get('supplier/create', [SupplierController::class, 'create'])
->name('supplier.create');

Route::post('supplier', [SupplierController::class, 'store'])
->name('supplier.store');

Route::get('supplier', [SupplierController::class, 'index'])
->name('supplier.index');

Route::get('supplier/show/{supplier}', [SupplierController::class, 'show'])
->name('supplier.show');

Route::get('supplier/edit/{supplier}', [SupplierController::class, 'edit'])
->name('supplier.edit');

Route::patch('supplier/{supplier}', [SupplierController::class, 'update'])
->name('supplier.update');

Route::delete('supplier/{supplier}', [SupplierController::class, 'destroy'])
->name('supplier.destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
