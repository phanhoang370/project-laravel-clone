<?php

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

Auth::routes();

Route::get('/admin/user','AdminController@alluser');
Route::get('/test','AdminController@test');
Route::post('/admin/user/saveRole','AdminController@saveRole');


Route::get('/{lang}/dashboard', 'HomeController@index');
Route::get('/{lang}/dashboard/new', 'HomeController@newDashboard');
Route::get('/{lang}/dashboard/packet', 'AdminController@packet');
Route::get('/{lang}/dashboard/jstree', 'AdminController@jstree');
Route::get('/{lang}/dashboard/user', 'AdminController@user');

Route::get('/ifram1', function(){
    return view('iframeChart/iframeChart1');
});
Route::get('/ifram2', function(){
    return view('iframeChart/iframeChart2');
});
Route::get('/ifram4', function(){
    return view('iframeChart/iframeChart4');
});
Route::get('/ifram5', function(){
    return view('iframeChart/iframeChart5');
});
Route::get('/ifram6', function(){
    return view('iframeChart/iframeChart6');
});
Route::get('/ifram7', function(){
    return view('iframeChart/iframeChart7');
});
Route::get('/ifram8', function(){
    return view('iframeChart/iframeChart8');
});
Route::get('/jstree', 'HomeController@loadjstree');
Route::get('/jstreeload', 'HomeController@controljstree');




//Route::post('/removeEvt', 'HomeController@Remove');

//Route EvtControler
Route::get('/evt', 'EvtlistController@Evtlist');
Route::post('/removeEvt', 'HomeController@Remove');
Route::resource('evtitems', 'EvtlistController');

Route::post('/config', 'HomeController@save');
Route::resource('posts', 'PostsController');
Route::get('post/create', function (){
    return view('post.create');
});

Route::get('welcome', function (){
   return view('welcome');
});

//vue route
Route::get('vue/{vue?}', function(){
    return view('app');
})->where('vue', '^(?!.*api).*$[\/\w\.-]*');

Route::get('vue/admin/{vue?}', function(){
    return view('admin');
})->where('vue', '^(?!.*api).*$[\/\w\.-]*');

//lang setting
Route::get('/{lang?}','LanguageController@index');
Route::get('/{lang?}/login','LanguageController@login');
Route::get('/{lang?}/register','LanguageController@register');

