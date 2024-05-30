<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Homepage
Route::get('/', function () {
    $products = App\Models\Product::all();
    return view('homepage', compact('products'));
})->name('homepage');

Route::get('/product/{product}', function (Product $product) {
    $product = Product::where('id', $product->id)->first();
    return view('homepage', compact('product'));
})->name('detail.product');
// end

Route::namespace('App\Http\Controllers')->group(function() {

    // Register
    Route::middleware('guest')->name("register.")->group(function() {
        Route::get('/register', 'RegisterController@index')->name("index");
        Route::post('/register', 'RegisterController@store')->name("store");
    });

    // Login
    Route::name('auth.')->group(function() {
        Route::get('/login', 'LoginController@index')->name("index")->middleware('guest');
        Route::post('/login', 'LoginController@authenticate')->name("login");
        Route::post('/logout', 'LoginController@logout')->name("logout")->middleware('auth');
    });

    Route::middleware(['auth', 'role:admin'])->group(function() {

        Route::prefix('dashboard')->group(function () {
            // Dashboard
            Route::get('/', function() {
                return view('dashboard');
            });

            // Product
            Route::name('product.')->group(function () {
                Route::get('product', 'ProductController@index')->name('index');
                Route::get('product/create', 'ProductController@create')->name('create');
                Route::post('product/store', 'ProductController@store')->name('store');
                Route::get('product/{product}', 'ProductController@show')->name('show');
                Route::get('product/{product}/edit', 'ProductController@edit')->name('edit');
                Route::patch('product/{product}/update', 'ProductController@update')->name('update');
                Route::delete('product/{product}/destroy', 'ProductController@destroy')->name('destroy');
            });

            // Transaction
            // Route::name('transaction.')->group(function () {
            //     Route::get('transaction', 'TransactionController@index')->name('index');
            // });

        });

    });
});







