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
use Illuminate\Http\Request;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    Route::resource('roles', 'RoleController', [
        'names' => [
            'show' => 'admin.roles.show',
            'index' => 'admin.roles.index',
            'edit' => 'admin.roles.edit',
            'destroy' => 'admin.roles.destroy',
            'store' => 'admin.roles.store'
        ]
    ]);
    Route::resource('permissions', 'PermissionController', [
        'names' => [
            'index' => 'admin.permissions.index',
            'edit' => 'admin.permissions.edit',
            'destroy' => 'admin.permissions.destroy',
            'store' => 'admin.permissions.store'
        ]
    ]);

    Route::resource('users', 'UserController', [
        'names' => [
            'show' => 'admin.users.show',
            'index' => 'admin.users.index',
            'edit' => 'admin.users.edit',
            'destroy' => 'admin.users.destroy',
            'store' => 'admin.users.store'
        ]
    ]);
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get('dashboard', function (Request $request) {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('inner', function () {
        return view('admin.inner');
    });
});

//Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);