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

Route::get('/', function () {
    return view('starting_page');
});

Route::get('/info', function () {
    return view('info');
});

/*
Route::get('/test/{name}/{age}', 'HobbyController@index'); // pointing  ke func index di HobbyController ketika /test
*/

Route::resource('hobby', 'HobbyController'); // terdapat 7 routes, untuk melihatnya jalankan php artisan route:list --name=hobby

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');