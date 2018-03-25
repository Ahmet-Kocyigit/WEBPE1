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

Route::get('/', [
    'uses' => 'StudentController@getHome',
    'as' => 'home']);

Route::get('/add',[
    'uses' => 'StudentController@getAdd',
    'as' => 'add']);

Route::get('edit/{id}', [
    'uses' => 'StudentController@getStudentsById',
    'as' => 'overview.edit']);


Route::get('delete/{id}', [
    'uses' => 'StudentController@deleteStudent',
    'as' => 'delete']);


Route::get('/overview',[
    'uses' => 'StudentController@getOverview',
    'as' => 'overview']);


Route::post('/ietsAnders',[
    'uses' => 'StudentController@addStudent',
    'as' => 'addStudent']);

Route::post('/create',[
    'uses' => 'StudentController@updateStudent',
    'as' => 'update']);


