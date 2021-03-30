<?php

use Illuminate\Support\Facades\Auth;
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
    // $date = [];
    // $data['id'] = 5;
    // $data['name'] = 'sofan';
    // return view('welcome', $data);

    /* $obj = new \stdClass();

    $obj->name = 'sofan';
    $obj->id = 5;
    $obj->gender = 'male';
    return view('welcome', compact('obj'));
    */

    return 'home';
    // return view('welcome');
});


Route::get('forPerson', function () {
    return 'with auth';
})->middleware('auth');


// Route::get('first', 'FirstController@showString');

// Route::get('index', 'FirstController@getIndex');

Route::get('index', 'Front\UserController@index');

// Route::get('getIndex', 'Front\UserController@index');

Route::group(['namespace' => 'Admin'], function () {
    Route::get('second', 'SecondController@showString')->middleware('auth');
    Route::get('second1', 'SecondController@showString1');
    Route::get('second2', 'SecondController@showString2');
    Route::get('second3', 'SecondController@showString3');
});


// Route::get('second', 'Admin\SecondController@showString');

Route::get('login', function () {
    return 'Must Br login To access this Route';
})->name('login');

Route::resource('news', 'NewsController');


Route::get('/landing', function () {
    return view('landing');
});



Route::get('/about', function () {
    return view('about');
});


Route::get('showEmp', 'EmpController@showEmp');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
