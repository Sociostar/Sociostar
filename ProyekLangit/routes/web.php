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
//Profile
Route::get('profile','UserController@edit')->name('profile.edit');
Route::post('profile','UserController@update')->name('profile.update');
//Campaign
Route::resource('campaign','CampaignController');
Route::get('campaignSelf','CampaignController@self')->name('campaign.self');
Route::get('/home', 'HomeController@index')->name('home');
