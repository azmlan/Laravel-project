<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', function () {

        return view('welcome');
    });

    Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create')->name('pizzas.create');
    Route::post('/pizzas/store', 'App\Http\Controllers\PizzaController@store')->name('pizzas.store');
    Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->name('pizzas.index')->middleware('auth');
    Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show')->name('pizzas.show')->middleware('auth');
    Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');
    Auth::routes([
        'register' => true
    ]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
