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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


$group_admin_emarket = [
    'namespace' => 'Emarket\Admin',
    'prefix' => 'admin/emarket'
];
/*Route::resource('rest', 'RestTestController')->names('restTest');*/
Route::group(['namespace' => 'Emarket', 'prefix' => 'emarket'], function (){
    Route::resource('plist', 'ProductListController')->names('emarket.product');
});

Route::group($group_admin_emarket, function(){
    $methods = ['index', 'edit', 'store', 'update', 'create'];
    Route::resource('categories', 'CategoryController')->only($methods)->names('blog.admin.categories');
});




