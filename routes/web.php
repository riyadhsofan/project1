<?php

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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



//

// Route::get('/insert', function () {
//     DB::insert(Eloquent'insert into posts(title,content) values(?,?)', ['php', 'laravel is the best in php']);
// });



// Route::get('/read', function () {

//     $posts = Post::all();

//     foreach ($posts as $post) {

//         return $post->title;
//     }
// });

// Route::get('/find', function () {

//     $post = Post::find(1);

//     return $post->title;
// });



Route::get('/findwhere', function () {

    $posts = Post::where('id', 1)->orderBy('id', 'desc')->take(1)->get();

    return $posts;
});


Route::get('/readall', function () {

    $posts[] = Post::all();

    foreach ($posts as $post) {

        return $post;
    }
});

// Route::get('/findmore',function(){

// $posts=Post::where('users_count','<',1)->firstOrFail();


//     });


Route::get('/newinsert', function () {

    $post = new Post;

    // $post -> $title ='new title';
    //$post ->$content ='new content';

    $post->save();
});

Route::get('/delete', function () {

    // $post= new Post::find(1);

    // $post->delete();

    //Post::where('id',2)->delete();

    $posts = Post::find(17);



    $posts->delete();
});


Route::get('/delete2', function () {

    // $post= new Post::find(1);

    // $post->delete();

    //Post::where('id',2)->delete();

    // $posts = destroy(18);

});


// Route::get('getoffer', 'CurdController@getOffers');
// Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

Route::group(['prefix' => 'offers'], function () {
    //Route::get('store', 'CurdController@store');

    Route::get('create', 'CurdController@create');
    Route::post('store', 'CurdController@store')->name('offers.store');
});
// });
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
