<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\Category\CategoryList;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('admin.dashboard');

Route::group(['prefix' => 'admin', 'as'=>'admin.','middleware' => ['auth', 'admin']], function () {

            // category
           Route::get('category-list',CategoryList::class)->name('category');
           Route::get('category-create',\App\Http\Livewire\Admin\Category\CategoryCreation::class)->name('category-create');

           ///// Brand

            Route::get('brand-list',\App\Http\Livewire\Admin\BrandList::class)->name('brand');
            Route::get('brand-create',\App\Http\Livewire\Admin\BrandCreation::class)->name('brand-create');

            // product

             Route::get('product-list',\App\Http\Livewire\Admin\Product\ProductList::class)->name('product');
            Route::get('product-create',\App\Http\Livewire\Admin\Product\ProductCreation::class)->name('product-create');

});

require __DIR__ . '/auth.php';
