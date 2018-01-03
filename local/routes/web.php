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

Route::get('/','HomepageController@showHomepage');
Route::get('/danh-muc/{pathCategory}','feCategoryController@getDetailCategory');
Route::get('/category', 'HomepageController@getFrontendContentCategory');

Route::get('/{pathCategory}/san-pham/{pathProduct}', 'feProductController@getDetailProduct');

Route::get('/catalogue/{pathCatalogue}', 'HomepageController@getDetailCatalogue');

/////////////////////////////////////////////
/// BACKEND

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
    Route::post('sml_admin/category', ['as' => 'category.search', 'uses' => 'CategoryController@search']);
    Route::post('sml_admin/category/create', ['as' => 'category.store', 'uses' => 'CategoryController@store', 'middleware' => ['permission:category-create']]);
    Route::get('sml_admin/category/create', ['as' => 'category.create', 'uses' => 'CategoryController@create', 'middleware' => ['permission:category-create']]);
    Route::get('sml_admin/category/{id}/edit', ['as' => 'category.edit', 'uses' => 'CategoryController@edit', 'middleware' => ['permission:category-edit']]);
    Route::patch('sml_admin/category/{id}', ['as' => 'category.update', 'uses' => 'CategoryController@update', 'middleware' => ['permission:category-edit']]);
    Route::delete('sml_admin/category/{id}', ['as' => 'category.destroy', 'uses' => 'CategoryController@destroy', 'middleware' => ['permission:category-delete']]);

    //PRODUCT
    Route::get('sml_admin/product', ['as' => 'product.index', 'uses' => 'ProductController@index', 'middleware' => ['permission:product-list|product-create|product-edit|product-delete']]);
    Route::post('sml_admin/product/create', ['as' => 'product.store', 'uses' => 'ProductController@store', 'middleware' => ['permission:product-create']]);
    Route::post('sml_admin/product', ['as' => 'product.search', 'uses' => 'ProductController@search']);
    Route::get('sml_admin/product/create', ['as' => 'product.create', 'uses' => 'ProductController@create', 'middleware' => ['permission:product-create']]);
    Route::get('sml_admin/product/{id}/edit', ['as' => 'product.edit', 'uses' => 'ProductController@edit', 'middleware' => ['permission:product-edit']]);
    Route::patch('sml_admin/product/{id}', ['as' => 'product.update', 'uses' => 'ProductController@update', 'middleware' => ['permission:product-edit']]);
    Route::delete('sml_admin/product/{id}', ['as' => 'product.destroy', 'uses' => 'ProductController@destroy', 'middleware' => ['permission:product-delete']]);

    //PAGE
    Route::get('sml_admin/page', ['as' => 'page.index', 'uses' => 'PageController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/page/create', ['as' => 'page.store', 'uses' => 'PageController@store', 'middleware' => ['permission:page-create']]);
    Route::post('sml_admin/page', ['as' => 'page.search', 'uses' => 'PageController@search']);
    Route::get('sml_admin/page/create', ['as' => 'page.create', 'uses' => 'PageController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/page/{id}/edit', ['as' => 'page.edit', 'uses' => 'PageController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/page/{id}', ['as' => 'page.update', 'uses' => 'PageController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/page/{id}', ['as' => 'page.destroy', 'uses' => 'PageController@destroy', 'middleware' => ['permission:page-delete']]);

    //CATALOGUE
    Route::get('sml_admin/catalogue', ['as' => 'catalogue.index', 'uses' => 'CatalogueController@index', 'middleware' => ['permission:catalogue-list|catalogue-create|catalogue-edit|catalogue-delete']]);
    Route::post('sml_admin/catalogue/create', ['as' => 'catalogue.store', 'uses' => 'CatalogueController@store', 'middleware' => ['permission:catalogue-create']]);
    Route::post('sml_admin/catalogue', ['as' => 'catalogue.search', 'uses' => 'CatalogueController@search']);
    Route::get('sml_admin/catalogue/create', ['as' => 'catalogue.create', 'uses' => 'CatalogueController@create', 'middleware' => ['permission:catalogue-create']]);
    Route::get('sml_admin/catalogue/{id}/edit', ['as' => 'catalogue.edit', 'uses' => 'CatalogueController@edit', 'middleware' => ['permission:catalogue-edit']]);
    Route::patch('sml_admin/catalogue/{id}', ['as' => 'catalogue.update', 'uses' => 'CatalogueController@update', 'middleware' => ['permission:catalogue-edit']]);
    Route::delete('sml_admin/catalogue/{id}', ['as' => 'catalogue.destroy', 'uses' => 'CatalogueController@destroy', 'middleware' => ['permission:catalogue-delete']]);

});