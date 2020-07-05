<?php

use App\Providers\RouteServiceProvider;
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
    return view('welcome', ['title' => 'WANDY-BELAJAR LARAVEL 7']);
});

Route::get('home', function() {
	return view('home');
});

route::get('edulevels','EdulevelController@data');
route::get('edulevels/add','EdulevelController@add');
route::post('edulevels','EdulevelController@addProses');
route::get('edulevels/edit/{id}', 'EdulevelController@edit');
route::patch('edulevels/{id}', 'EdulevelController@editProses');
route::delete('edulevels/{id}', 'EdulevelController@delete');

Route::resource('programs', 'ProgramController');