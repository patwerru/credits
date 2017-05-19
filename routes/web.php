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
    return view('login');
});

Route::get('home',['as'=>'home','uses'=>'PagesController@home']);
Route::get('debtors',['as'=>'debtors','uses'=>'PagesController@debtors']);
Route::get('logout',['as'=>'logout','uses'=>'HomeController@logout']);
Route::get('debtor',['as'=>'debtor','uses'=>'PagesController@debtor']);
Route::get('profiles',['as'=>'profiles','uses'=>'PagesController@profiles']);
Route::get('manage',['as'=>'manage','uses'=>'PagesController@manage']);
Route::post('check_debts',['as'=>'check_debts','uses'=>'HomeController@check_debts']);
Route::post('check_roles',['as'=>'check_roles','uses'=>'HomeController@check_roles']);
Route::get('503',['as'=>'503','uses'=>'PagesController@errors']);
Route::get('test',['as'=>'test','uses'=>'PagesController@test']);
Route::post('register',['as' => 'register', 'uses'=>'HomeController@register']);
Route::post('login_form',['as' => 'login_form', 'uses'=>'HomeController@login_form']);
Route::get('registration',['as' => 'registration', 'uses'=>'PagesController@registration']);
Route::get('login',['as' => 'login', 'uses'=>'PagesController@login']);


Route::get('mystery',['as' => 'mystery', 'uses'=>'PagesController@mystery']);


