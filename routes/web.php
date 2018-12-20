<?php

use App\Boats;
// use App\Http\Controllers;

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

// Route::get('/', function () {
    // return view('view1');
// });

// Route::get('/home', 'HomeController@index');
Route::auth();
Route::get('/', function () {
    return view('accueil');
});


Route::get('{n}', function ($n) {
    return "Je suis la page $n";
})->where('n', '[1-3]');


Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

Route::get('facture/{n}', function ($n) {
    return view('facture')->with('numero',$n);
})->where('n', '[0-9]+');

Route::get('accueil', function () {
    return view('accueil');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('lister', function () {
    return view('lister');
});

Route::get('plusInfo', function () {
    return view('plusInfo');
});

Route::resource('boats', 'BoatsController');

Route::get('profil', function() {

    $owns = App\Owner::where('user_id', Auth::id())->get();
    $boats = [];

    foreach($owns as $own) {
        $boats[] = Boats::find($own->boat_id);
    }

    return view('profil')->with('boats', $boats);
});

Auth::routes();
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::view('reservation', 'reservation');