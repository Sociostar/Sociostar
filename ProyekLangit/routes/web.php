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
    return view('landingpage');
})->name('home');
//Guest
Route::get('catalog','ItemController@catalog')->name('catalog.index');
Auth::routes();
//Profile
Route::get('profile','UserController@edit')->name('profile.edit');
Route::post('profile','UserController@update')->name('profile.update');
//Campaign
Route::resource('campaign','CampaignController');
Route::get('campaignSelf','CampaignController@self')->name('campaign.self');
//CampaignPhoto
Route::delete('campaign/photo/delete/','CampaignPhotoController@destroy')->name('campaignPhoto.destroy');
//Item
Route::resource('item','ItemController');
Route::get('itemSelf','ItemController@self')->name('item.self');
//ItemPhoto
Route::delete('item/photo/delete/','ItemPhotoController@destroy')->name('itemPhoto.destroy');
//Transaction
Route::post('transaction','TransactionController@store')->name('transaction.store');
Route::get('transaction/self','TransactionController@self')->name('transaction.self');
Route::get('transaction/history','TransactionController@history')->name('transaction.history');
Route::post('/transaction/confirmation/{transaction}','TransactionController@confirmation')->name('transaction.confirmation');
Route::delete('/transaction/delete/{transaction}','TransactionController@destroy')->name('transaction.destroy');
Route::get('/home', 'HomeController@index')->name('dashboard');
//Admin
Route::get('admin/catalog/fp','AdminController@CatalogFP')->name('admin.catalogFp.index');
Route::get('admin/catalog/fp/{item}','AdminController@CatalogFPShow')->name('admin.catalogFp.show');
Route::put('admin/catalog/update/{item}','AdminController@CatalogUpdate')->name('admin.catalog.update');
