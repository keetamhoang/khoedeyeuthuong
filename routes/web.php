<?php

/*
 * Frontend
 */
Route::get('/', 'Frontend\HomeController@index');

Route::get('san-pham', 'Frontend\ProductController@index');
Route::get('san-pham/{slug}-{id}', 'Frontend\ProductController@detail')
    ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);
Route::get('{slug}-{id}', 'Frontend\BlogController@detail')
    ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);
Route::get('blog-suc-khoe', 'Frontend\BlogController@index');
Route::get('thong-tin-ca-nhan', 'Frontend\CashController@index');
Route::get('don-hang-cua-ban', 'Frontend\OrderController@index');
Route::get('san-pham-cua-ban', 'Frontend\ProductController@index');
Route::get('xu-cua-toi', 'Frontend\CashController@myXu');

Route::get('ladi/thank-you', 'Frontend\HomeController@thankYou');

/*
 * End Frontend
 */

/*
 * Auth
 */
Route::get('dang-nhap', 'Frontend\AuthController@loginView');
Route::post('login', 'Frontend\AuthController@login');
Route::get('admin/logout', 'Frontend\AuthController@logout');

Route::post('question', 'Frontend\HomeController@question');

// social
Route::get('login-social/redirect', 'Frontend\AuthController@redirectToProvider');
Route::get('login-social/callback', 'Frontend\AuthController@handleProviderCallback');
Route::get('logout', 'Frontend\AuthController@logoutSocial');
/*
 * End Auth
 */


/*
 * Admin KEE
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth.admin']], function () {
    Route::get('/', 'Backend\MainController@index');

    Route::get('brands', 'Backend\BrandController@index');
    Route::get('brandAttribute.data', 'Backend\BrandController@brandAttribute');
    Route::get('brands/create', 'Backend\BrandController@createView');
    Route::post('brands/store', 'Backend\BrandController@store');
    Route::get('brands/{id}', 'Backend\BrandController@editView');
    Route::post('brands/update', 'Backend\BrandController@update');
    Route::post('brands/update-status-brand', 'Backend\BrandController@updateStatus');
    Route::get('brands/delete/{id}', 'Backend\BrandController@delete');

    Route::get('get-ck-by-brand-id', 'Backend\BrandController@getCkByBrandId');

    Route::get('users', 'Backend\AccountController@index');
    Route::get('userAttribute.data', 'Backend\AccountController@userAttribute');

    Route::get('accounts', 'Backend\AccountController@index');
    Route::get('userAttribute.data', 'Backend\AccountController@userAttribute');

    Route::get('accounts/contents', 'Backend\AccountController@contentIndex');
    Route::get('contentAttribute.data', 'Backend\AccountController@contentAttribute');

    Route::get('transactions', 'Backend\TransactionController@index');
    Route::get('transactionAttribute.data', 'Backend\TransactionController@transactionAttribute');

    Route::get('products', 'Backend\ProductController@index');
    Route::get('productAttribute.data', 'Backend\ProductController@productAttribute');
    Route::post('brands/update-status-product', 'Backend\ProductController@updateStatus');
});
/*
 * End Admin
 */