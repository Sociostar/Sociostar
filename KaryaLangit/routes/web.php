<?php
use App\Blog;
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
Route::middleware(['auth'])->group(function () {
  Route::resource('blog','BlogController',['except' => ['show']]);
  Route::delete('blogphoto/{blogphoto}','BlogPhotoController@destroy')->name('blogPhoto.destroy');
});
Route::get('/', function () {
    return view('welcome',[
      'data' => Blog::orderBy('id', 'desc')->limit(3)->get()
    ]);
})->name('welcome');
Route::get('about',function(){
  return view('about');
})->name('about');
Route::get('/programs/aksi-mari-berbagi',function(){
  return view('programs.aksi-mari-berbagi');
})->name('programs.aksi-mari-berbagi');
Route::get('/programs/gerakan-al-maun',function(){
  return view('programs.gerakan-al-maun');
})->name('programs.gerakan-al-maun');
Route::get('/programs/donasi-kemanusiaan-negeri-syam',function(){
  return view('programs.donasi-kemanusiaan-negeri-syam');
})->name('programs.donasi-kemanusiaan-negeri-syam');
Route::get('/programs/festival-tauhid-al-mujaddid',function(){
  return view('programs.festival-tauhid-al-mujaddid');
})->name('programs.festival-tauhid-al-mujaddid');
Route::get('/programs/rumah-singgah-pecinta-al-quran',function(){
  return view('programs.rumah-singgah-pecinta-al-quran');
})->name('programs.rumah-singgah-pecinta-al-quran');
Route::get('/programs/sedekah-rumah-cinta-anak-kanker',function(){
  return view('programs.sedekah-rumah-cinta-anak-kanker');
})->name('programs.sedekah-rumah-cinta-anak-kanker');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('blog/{blog}','BlogController@show')->name('blog.show');
Route::get('blog-list','BlogController@list')->name('blog.list');
