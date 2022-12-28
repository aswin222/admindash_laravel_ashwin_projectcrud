<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProjectController;

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

// Admin Part
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        // Amin routes
        Route::resource('admins', 'Admin\AdminController');
        Route::resource('roles', 'Admin\RoleController');
        Route::resource('categories', 'Admin\CategoryController');
        Route::resource('users', 'Admin\UserController');
        Route::resource('settings', 'Admin\SettingController');
    });
    // Default
    Route::get('/home', 'HomeController@index')->name('home');
});


//project-crud-routes

 
Route::get('/index', 'ProjectController@index')->name('index');
Route::get('/create', 'ProjectController@create')->name('create');
Route::post('store/', 'ProjectController@store')->name('store');
Route::get('show/{project}', 'ProjectController@show')->name('show');
Route::get('edit/{project}', 'ProjectController@edit')->name('edit');
Route::put('edit/{project}','ProjectController@update')->name('update');
Route::delete('/{project}','ProjectController@destroy')->name('destroy');



//projects-csv-routes
