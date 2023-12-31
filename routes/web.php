<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/admin/userrole/index', function () {
    return view('/admin/userrole/index');
});

Route::get('/admin/userrole/create', function () {
    return view('/admin/userrole/create');
});


Route::get('/admin/useraccount/index', function () {
    return view('/admin/useraccount/index');
});

Route::get('/admin/useraccount/create', function () {
    return view('/admin/useraccount/create');
});


Route::get('/admin/product/index', function () {
    return view('/admin/product/index');
});

Route::get('/admin/product/create', function () {
    return view('/admin/product/create');
});

Route::get('/admin/package/index', function () {
    return view('/admin/package/index');
});

Route::get('/admin/package/create', function () {
    return view('/admin/package/create');
});


Route::get('/admin/artikel/index', function () {
    return view('/admin/artikel/index');
});

Route::get('/admin/artikel/create', function () {
    return view('/admin/artikel/');
});

Route::get('/admin/changepassword', function () {
    return view('/admin/changepassword');
});

Route::get('/user/home', function () {
    return view('/user/home');
});

Route::get('/user/artikel', function () {
    return view('/user/artikel');
});

Route::get('/user/artikelread', function () {
    return view('/user/artikelread');
});

Route::get('/user/kalkulator', function () {
    return view('/user/kalkulator');
});

Route::get('/user/package', function () {
    return view('/user/package');
});


Route::get('/user/changepassword', function () {
    return view('/user/changepassword');
});

Route::get('/user/editprofil', function () {
    return view('/user/editprofil');
});

