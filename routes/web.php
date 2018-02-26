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
//********************************************************************************************************************//
//Формуємо запити типу get
Route::get('/', 'IndexController@index')->name('home');   // Голоана сторінка сайту новин
Route::get('article/{id}/{slug}', 'IndexController@show')->name('articleShow');   // Сторінка з новиною(динамічна звязка з новиною через id)
Route::get('category/{id_cat}/{slug_cat}', 'IndexController@find_by_cat')->name('categoryFilter'); // Сторінка з новинами вибраної категорії
Route::get('tag/{tag_id}/{tag_slug}', 'IndexController@find_art_by_tag')->name('tagFilter'); // Сторінка з новинами вибраної категорії
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
    Route::group(['middleware' => 'admin', 'prefix' => 'admin'],function(){
        Route::get('/', 'Admin\AccountController@index')->name('admin'); // Сторінка адміна;

        /*******************************         Categories          *****************************************/
        Route::get('/categories', 'Admin\CategoriesController@index')->name('categories'); // Сторінка перегляду категорій в адмінці;

        Route::get('/categories/add', 'Admin\CategoriesController@addCategory')->name('categories.add'); // Сторінка адміна
        Route::post('/categories/add', 'Admin\CategoriesController@addRequestCategory');                 // додачі категорії;

        Route::get('/categories/edit/{id}', 'Admin\CategoriesController@editCategory')->where('id','\d+')->name('categories.edit'); // Сторінка адміна
        Route::post('/categories/edit/{id}', 'Admin\CategoriesController@editRequestCategory')->where('id','\d+');            // редагування категорії;

        Route::delete('/categories/delete', 'Admin\CategoriesController@deleteCategory')->name('categories.delete');// Сторінка адміна видалення категорії

        /********************************         Articles           *****************************************/
        Route::get('/articles', 'Admin\ArticlesController@index')->name('articles'); // Сторінка перегляду статей в адмінці;

        Route::get('/articles/add', 'Admin\ArticlesController@addArticle')->name('articles.add'); // Сторінка адміна
        Route::post('/articles/add', 'Admin\ArticlesController@addRequestArticle');               // додачі новини;

        Route::get('/articles/edit/{id}', 'Admin\ArticlesController@editArticle')->where('id','\d+')->name('articles.edit'); // Сторінка адміна
        Route::post('/articles/edit/{id}', 'Admin\ArticlesController@editRequestArticle')->where('id','\d+');               // редагування новини;

        Route::delete('/articles/delete', 'Admin\ArticlesController@deleteArticle')->name('articles.delete'); // Сторінка адміна видалення новини

        /********************************         Users           *****************************************/
        Route::get('/users', 'Admin\UsersController@index')->name('users');   // Сторінка перегляду користувачів в адмінці;

        /********************************         Tags           *****************************************/
        Route::get('/tags', 'Admin\TagsController@index')->name('tags'); // Сторінка перегляду тегів в адмінці;

        Route::get('/tags/add', 'Admin\TagsController@addTag')->name('tags.add'); // Сторінка адміна
        Route::post('/tags/add', 'Admin\TagsController@addRequestTag');               // додачі новини;

        Route::get('/tags/edit/{id}', 'Admin\TagsController@editTag')->where('id','\d+')->name('tags.edit'); // Сторінка адміна
        Route::post('/tags/edit/{id}', 'Admin\TagsController@editRequestTag')->where('id','\d+');

        Route::delete('/tags/delete', 'Admin\TagsController@deleteTag')->name('tags.delete'); // Сторінка адміна видалення новини

    });
});
