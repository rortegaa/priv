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


Route::get('district/{district}/rules', 'RuleController@index')->name('rules.index');
Route::get('district/{district}/rules/create', 'RuleController@create')->name('rules.create');
Route::get('district/{district}/rules/edit/{rule}', 'RuleController@edit')->name('rules.edit');
Route::post('/rules', 'RuleController@store') ->name('rules.store');
Route::put('district/{district}/rules/{rule}', 'RuleController@update') ->name('rules.update');
Route::delete('/rules/{id}', 'RuleController@destroy')->name('rules.destroy');


