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
//Header and footer
Route::get('Header', ['as' => 'Header', 'uses'=>'TestController@Header']);
Route::get('Footer', ['as' => 'Footer', 'uses'=>'TestController@Footer']);

//For Navigation Bar
Route::get('home', ['as'=>'home', 'uses'=>'TestController@index']);

Route::get('View', ['as'=>'content', 'uses'=>'TestController@index']);

Route::get('AboutUs', ['as'=>'AboutUs', 'uses'=>'TestController@AboutUs']);

Route::get('Menu', ['as'=>'Menu', 'uses'=>'MenuController@index']);

//Route::get('Blog', ['as'=>'Blog', 'uses'=>'BlogController@index']);
Route::Get('Blog', ['as'=>'BlogPage', 'uses'=>'BlogController@Pagination']);

Route::get('Contact', ['as'=>'Contact', 'uses'=>'TestController@Contact']);

Route::get('getAddStudent', ['as'=>'getAdd', 'uses'=>'TestController@add']);
Route::post('AddStudent', ['as' => 'add', 'uses'=>'TestController@AddStudent']);

Route::get('Edit/{ID}', ['as' => 'getEdit', 'uses'=>'TestController@getStudent']);
Route::post('Edit/{ID}', ['as' => 'postEdit', 'uses'=>'TestController@EditStudent']);

Route::get('Delete/{ID}', ['as' => 'Delete', 'uses'=>'TestController@DeleteStudent']);



Route::get('SignIn', ['as' => 'SignIn', 'uses' => 'TestController@SignIn']);

Route::post('home', ['as'=>'Verify', 'uses'=>'AccountController@Verify']);

Route::get('Admin', ['as' => 'Admin', 'uses' => 'AdminController@Show']);

Route::get('AddFood', ['as'=>'AddFood', 'uses'=>'AdminController@AddFood']);

Route::post('Admin/AddFood', ['as' => 'AddNewFood', 'uses' => 'AdminController@AddNewFood']);

Route::get('ShowFood', ['as' => 'ShowFood', 'uses' => 'AdminController@ShowFood']);

Route::get('EditFood/{ID}', ['as' => 'showEditFood', 'uses' => 'AdminController@showEditFood']);

//Route::post('EditFood/{ID}', ['as' => 'updateFood', 'uses' => 'AdminController@updateFood']);
Route::post('EditFood/{ID}', ['as' => 'updateFood', 'uses' => 'AdminController@updateFood']);

Route::get('DeleteFood/{ID}', ['as' => 'DeleteFood', 'uses' => 'AdminController@deleteFood']);

Route::get('ShowUser', ['as' => 'ShowUser', 'uses' => 'AdminController@showUser']);

Route::post('ShowUser/{ID}', ['as' => 'updateUser', 'uses' => 'AdminController@updateUser']);

Route::post('DeleteUser/{ID}', ['as' => 'deleteUser', 'uses' => 'AdminController@deleteUser']);

Route::post('AddUser', ['as' => 'addUser', 'uses' => 'AdminController@addUser']);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
