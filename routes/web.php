<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
})->name('home');

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/login', function () {
    return view('login');
})->middleware(['auth', 'verified'])->name('login');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/admin/dashboard', 'admin.index')->name('admin.dashboard');
    Route::get('/admin/brands',[AdminController::class,'brands'])->name('admin.brands');
    Route::view('/admin/product', 'admin.products')->name('product');
    Route::view('/admin/product/add', 'admin.add.product')->name('addproduct');
    Route::view('/admin/brands', 'admin.brands')->name('brands');
    Route::view('/admin/brands/add', 'admin.add.brand')->name('addbrand');
    Route::view('/admin/categories', 'admin.categories')->name('categories');
    Route::view('/admin/categories/add', 'admin.add.category')->name('addcategory');
    Route::view('/admin/orders', 'admin.order.index')->name('orders');
    Route::view('/admin/orders/detail', 'admin.order.detail')->name('orderdetail');
    Route::view('/admin/orders/tracking', 'admin.order.tracking')->name('ordertracking');
    Route::view('/admin/slider', 'admin.slider')->name('slider');
    Route::view('/admin/slider/add', 'admin.add.slide')->name('addslider');
    Route::view('/admin/coupon', 'admin.coupons')->name('coupon');
    Route::view('/admin/user', 'admin.users')->name('user');
    Route::view('/admin/setting', 'admin.settings')->name('setting');
});

// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::view('/', 'index')->name('home');
// });

// Nanti dibawah sini hapus
Route::middleware('auth:sanctum')->group(function () {
    // Account
    Route::view('/account', 'account.index')->name('account');
    Route::view('/account/order', 'account.order')->name('order');
    Route::view('/account/address', 'account.address')->name('address');
    Route::view('/account/address/change', 'account.details')->name('change');
    Route::view('/account/address/form', 'account.address-form')->name('new');
    Route::view('/account/wishlist', 'account.wishlist')->name('awish');
    Route::view('/product/details', 'details')->name('products.details');
    Route::view('/shop', 'shop')->name('shop');
    Route::view('/about', 'about')->name('about');
    Route::view('/contact', 'contact')->name('contact');
    Route::view('/cart', 'cart.index')->name('cart');
    Route::view('/wishlist', 'wishlist')->name('wishlist');
});

require __DIR__ . '/auth.php';