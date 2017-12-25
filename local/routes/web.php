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
    return view('frontend.homepage.index');
});
Route::get('/category', function () {
    return view('frontend.category.category');
});

Route::get('/category/detail', function () {
    return view('frontend.detail.detail');
});

/////////////////////////////////////////////
/// Backend

Route::get('/sml_login', function () {
    return view('backend.login.login');
});
Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('sml_logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    //DASHBOARD
    Route::get('sml_admin/dashboard', function () {
        return view('backend.dashboard.index');
    })->name('dashboard');
    //USER
    Route::resource('sml_admin/users', 'UserController');

    //ROLE
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);

    //CATEGORY
    Route::get('sml_admin/category', ['as' => 'category.index', 'uses' => 'CategoryController@index', 'middleware' => ['permission:category-list|category-create|category-edit|category-delete']]);
    Route::post('sml_admin/category/create', ['as' => 'category.store', 'uses' => 'CategoryController@store', 'middleware' => ['permission:category-create']]);
    Route::get('sml_admin/category/create', ['as' => 'category.create', 'uses' => 'CategoryController@create', 'middleware' => ['permission:category-create']]);
    Route::get('sml_admin/category/{id}/edit', ['as' => 'category.edit', 'uses' => 'CategoryController@edit', 'middleware' => ['permission:category-edit']]);
    Route::patch('sml_admin/category/{id}', ['as' => 'category.update', 'uses' => 'CategoryController@update', 'middleware' => ['permission:category-edit']]);
    Route::delete('sml_admin/category/{id}', ['as' => 'category.destroy', 'uses' => 'CategoryController@destroy', 'middleware' => ['permission:category-delete']]);
});