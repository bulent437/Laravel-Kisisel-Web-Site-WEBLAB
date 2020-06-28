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



Route::get('/','blogController@home')->name('home');
Route::get('kayit', 'KullaniciController@register')->name('register.show');
Route::post('kayit-et', 'KullaniciController@kayit')->name('kayit-et');
Route::get('giris', 'KullaniciController@login')->name('login.show');
Route::post('giris-yap', 'KullaniciController@girisYap')->name('giris-yap');
Route::post('logout', 'KullaniciController@logout')->name('logout');
Route::get('hakkimda','blogController@hakkimda')->name('hakkimda');
Route::get('iletisim','blogController@iletisim')->name('iletisim');

Route::group(['middleware'=>['yetki']],function() { 
    Route::get('/yetkiguncelle/{id}', 'panel@yetkiguncelle')->name('yetki-guncelle'); 
    Route::get('/kullanicisil/{id}', 'panel@kullanicisil')->name('kullanici-sil');
    Route::get('/duyuruekle','panel@duyuruekle')->name('duyuru-ekle');
    Route::get('/duyuruyuekle','panel@duyuruyuekle')->name('duyuruyu-ekle');
    Route::get('/duyuruyusil/{id}','panel@duyuruyusil')->name('duyuruyu-sil');
    Route::get('/duyurugoruntule','panel@duyurugoruntule')->name('duyuru-goruntule');
    Route::get('/adminpaneli','panel@adminpanel')->name('adminpanel');
});



