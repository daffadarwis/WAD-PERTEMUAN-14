<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
//product
Route::resource('product',ProductController::class);

Route::get('product', [ProductController: :class. 'index'])->name('product.index');
Route::get('product/create', [ProductController: :class. 'create'])->name('product.create');
Route::get('product/store', [ProductController: :class. 'store'])->name('product.store');
Route::get('product/edit/{id}', [ProductController: :class. 'edit'])->name('product.edit');
Route::get('product/update/{id}', [ProductController: :class. 'update'])->name('update.store');
Route::get('product/destroy', [ProductController: :class. 'destroy'])->name('product.destroy');
Route::get('product/show/{id}', [ProductController: :class. 'show'])->name('product.show');
