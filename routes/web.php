<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index')->name('home');

// Companies
Route::get('/companies', 'CompanyController@index')->name('companies');
Route::get('/companies/create', 'CompanyController@create')->name('companiesCreate');
Route::post('/companies/create', 'CompanyController@store')->name('companiesStore');

Auth::routes(['register' => false]);

