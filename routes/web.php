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
//Route::get('/', function() { return view('welcome');});
//Route::get('/page', function() {return "Hello World cherez function in web!!!!";});

//********************************************************************************************************************//
//Формуємо запити типу get
Route::get('/', 'IndexController@index');   // Голоана сторінка сайту новин
Route::get('article/{id}', 'IndexController@show')->name('articleShow');   // Сторінка з новиною(динамічна звязка з новиною через id)
//********************************************************************************************************************//
//Група гостів (не зареєстрованих користувачів):
Route::group(['middleware' => 'guest'],function(){  //встроєний в ларавел middleware який перевіряє авторизований користувач чи ні;
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register'); // Сторінка реєстрації
    Route::post('/register', 'Auth\RegisterController@register');                              // Метод пост реєстрації

    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');                 // Сторінка логування
    Route::post('/login', 'Auth\LoginController@login');                                       // Метод пост логування
});
//********************************************************************************************************************//
//Група зареєстрованих користувачів:
Route::group(['middleware' => 'auth'],function(){  //встроєний в ларавел middleware який перевіряє авторизований користувач чи ні;
    Route::get('/my/account', 'AccountController@index')->name('account'); // Сторінка акаунта(кабінет);
    Route::get('/logout', function(){\Auth::logout(); return redirect(route('login'));}) -> name('logout'); // Вихід з акаунта(кабінета);
//Група адміністратора (під групою зареєстрованих користувачів):
    Route::group(['middleware' => 'admin'],function(){
        Route::get('/admin', 'Admin\AccountController@index')->name('admin'); // Сторінка адміна;

    });
});
//********************************************************************************************************************//
//Група адміністратора:
//Route::group(['middleware' => 'admin'],function(){
//    Route::get('/admin', 'Admin\AccountController@index')->name('admin'); // Сторінка адміна;
//
//});
//********************************************************************************************************************//