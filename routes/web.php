<?php
use app\Http\Controllers\Controller;
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
    return view('welcome');
    // return 'Welcome';
});

Route::get('/insert', function () {
    return view('insert');
    // return 'Welcome';
})->name('add');
Route::post('/insert', 'Controller@insertProduct');
Route::post('/edit/{item}', 'Controller@updateProduct');
Route::get('/edit/{item}', 'Controller@getProduct');

Route::get('delete/{item}', 'Controller@deleteProduct');


// Route::controller('/controller','Controller',['getFirst'=>'first','getSecond'=>'second','postThird'=>'third']);
// Route::get('/user', 'Controller@show');

Auth::routes();

Route::get('/home', 'HomeController@getProducts')->name('home');
// Route::get('/home', 'Controller@getProducts');
