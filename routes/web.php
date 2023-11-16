<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\UnitController;
use App\Http\Controllers\backend\ColorController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SupplierController;
use App\Http\Controllers\backend\PurchaesController;
use App\Http\Controllers\backend\SalesController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\PaymentController;


// frontend route
Route::get('/', function () {
    return view('frontend/home/home');
});
Route::get('/product', function () {
    return view('frontend/product/product');
});



// backend route

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('backend/dashboard/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('brand/index',[BrandController::class,'index'])->name('brand.index');
    Route::get('brand/insert',[BrandController::class,'create'])->name('brand.create');
    Route::post('brand/insert',[BrandController::class,'store'])->name('brand.store');
    Route::get('brand/update/{brand_id}',[BrandController::class,'edit'])->name('brand.edit');
    Route::post('brand/update/{brand_id}',[BrandController::class,'update'])->name('brand.update');
    Route::get('brand/show/{brand_id}',[BrandController::class,'show'])->name('brand.show');
    Route::get('brand/destroy/{brand_id}',[BrandController::class,'destroy'])->name('brand.destroy');
});

require __DIR__.'/auth.php';




