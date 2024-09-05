<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
Route::get('/', [PageController::class, 'index'])->name('main-page');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/wishlist', [PageController::class, 'wishlist'])->name('wishlist');

Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');

Route::get('/cart', [PageController::class, 'cart'])->name('cart');

Route::get('/my_profile', [PageController::class, 'my_profile'])->name('my_profile');

Route::get('/add_order', [PageController::class, 'add_order'])->name('add_order-page');
Route::post('/add_order', [UserController::class, 'add_order'])->name('add_order');

Route::post('/log', [UserController::class, 'log'])->name('log');
Route::post('/log2', [UserController::class, 'log2'])->name('log2');

Route::get('/logout', [PageController::class, 'logout'])->name('logout');

Route::post('/log', [UserController::class, 'log'])->name('log');

Route::post('/add_favorite', [UserController::class, 'add_favorite'])->name('add_favorite');
Route::post('/add_bag', [UserController::class, 'add_bag'])->name('add_bag');
Route::post('/del_bag', [UserController::class, 'del_bag'])->name('del_bag');

Route::get('/add_product', [PageController::class, 'add_product'])->name('add_product-page');
Route::post('/add_product', [AdminController::class, 'add_product'])->name('add_product');
Route::post('/del_product', [AdminController::class, 'del_product'])->name('del_product');

Route::get('/red_product', [PageController::class, 'red_product'])->name('red_product-page');
Route::post('/red_product', [AdminController::class, 'red_product'])->name('red_product');


Route::get('/add_category', [PageController::class, 'add_category'])->name('add_category-page');
Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::post('/del_category', [AdminController::class, 'del_category'])->name('del_category');

Route::get('/red_category', [PageController::class, 'red_category'])->name('red_category-page');
Route::post('/red_category', [AdminController::class, 'red_category'])->name('red_category');

Route::post('/create_order', [UserController::class, 'create_order'])->name('create_order');

Route::get('/order', [PageController::class, 'order'])->name('order-page');
Route::post('/order', [UserController::class, 'order'])->name('order');

Route::post('/delallfav', [UserController::class, 'delallfav'])->name('delallfav');

Route::post('/stats', [AdminController::class, 'stats'])->name('stats');

Route::get('/stat', [PageController::class, 'stat'])->name('stat');
Route::get('/provider', [PageController::class, 'provider'])->name('provider');
Route::get('/company', [PageController::class, 'company'])->name('company');
Route::post('/company', [AdminController::class, 'company'])->name('company_add');
Route::get('/news', [PageController::class, 'news'])->name('news');

Route::get('/post_add', [PageController::class, 'post_add'])->name('post_add-page');
Route::post('/post_add', [AdminController::class, 'post_add'])->name('post_add');
Route::post('/post_del', [AdminController::class, 'post_del'])->name('post_del');
Route::get('/post_reduct', [PageController::class, 'post_reduct'])->name('post_reduct-page');
Route::post('/post_reduct', [AdminController::class, 'post_reduct'])->name('post_reduct');

Route::get('/provider_add', [PageController::class, 'provider_add'])->name('provider_add-page');
Route::post('/provider_add', [AdminController::class, 'provider_add'])->name('provider_add');
