<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/books',
'App\Http\Controllers\AddBookController@allBooks')
->name('books');

Route::get('/books/{id}',
'App\Http\Controllers\AddBookController@showOneBook')
->name('one_book');

Route::get('/books/{id}/edit_book',
'App\Http\Controllers\AddBookController@editBook')
->middleware('auth')->name('edit_book');

Route::post('/books/{id}/edit_book',
'App\Http\Controllers\AddBookController@editBookSubmit')
->middleware('auth')->name('edit_book_submit');

Route::get('/books/{id}/delete_book',
'App\Http\Controllers\AddBookController@deleteBook')
->middleware('auth')->name('delete_book');



// ---------------------

Route::get('/cart/checkout', function () {
    return view('checkout');
})->middleware('auth')->name('checkout');

Route::get('/userpage', function () {
    return view('userpage');
})->middleware('auth')->name('userpage');

// Route::get('/userpage/orders', function () {
//     return view('orders');
// })->middleware('auth')->name('orders');

Route::get('/userpage/orders', 'App\Http\Controllers\OrderController@getOrders')->name('orders')->middleware('auth');

Route::get('/userpage/favorites', function () {
    return view('favorites');
})->middleware('auth')->name('favorites');

Route::get('/userpage/add_book', function () {
    return view('add_book');
})->middleware('auth')->name('add_book');



Route::name('user.')->group(function(){

  Route::get('/login', function () {
      if(Auth::check()){
        return redirect(route('user.userpage'));
      }
      return view('login');
  })->name('login');

  Route::post('/login', 'App\Http\Controllers\LoginController@login');

  Route::get('/logout', function(){
      Auth::logout();
      return redirect(route('home'));
  })->name('logout');

  Route::get('/signup', function () {
      if(Auth::check()){
          return redirect(route('user.userpage'));
      }
      return view('signup');
  })->name('signup');

  Route::post('/signup/save',
  'App\Http\Controllers\RegisterController@save')->name('signup_save');

  Route::post('/userpage/AddBook',
  'App\Http\Controllers\AddBookController@AddBook')->name('AddBook');

});

Route::post('/checkout/submit', 'App\Http\Controllers\OrderController@Order')->name('makeOrder');

Route::name('cart.')->group(function () {
    Route::get('/cart', function () {
        return view('cart');
    })->name('list');
    Route::post('/cart/store/{id}', 'App\Http\Controllers\CartController@addToCart')->name('store');
    Route::patch('/cart/update', 'App\Http\Controllers\CartController@updateCart')->name('update');
    Route::get('/cart/remove/{id}', 'App\Http\Controllers\CartController@removeCart')->name('remove');
});