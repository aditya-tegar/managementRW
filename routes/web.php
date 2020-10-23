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

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Warga01
Route::resource('warga01', 'Warga01Controller');

//Iuran01
Route::resource('iuran01', 'Iuran01Controller');

//Surat01
Route::resource('surat01', 'Surat01Controller');
Route::get('surat01/{surat01}/download', 'Surat01Controller@download')->name('surat01.download');

//Laporan_keuangan01
Route::get('/laporan_keuangan01', 'Iuran01Controller@laporan')->name('laporan01');

//laporan_surat01
Route::get('/laporan_surat01', 'Surat01Controller@laporan')->name('surat01');

//laporan_data01
Route::get('/laporan_data01', 'Warga01Controller@laporan')->name('warga01');


//Warga02
Route::resource('warga02', 'Warga02Controller');

//Iuran02
Route::resource('iuran02', 'Iuran02Controller');

//Surat02
Route::resource('surat02', 'Surat02Controller');
Route::get('surat02/{surat02}/download', 'Surat02Controller@download')->name('surat02.download');

//Laporan_keuangan02
Route::get('/laporan_keuangan02', 'Iuran02Controller@laporan')->name('laporan02');

//laporan_surat02
Route::get('/laporan_surat02', 'Surat02Controller@laporan')->name('surat02');

//laporan_data02
Route::get('/laporan_data02', 'Warga02Controller@laporan')->name('warga02');


//Warga03
Route::resource('warga03', 'Warga03Controller');

//Iuran03
Route::resource('iuran03', 'Iuran03Controller');

//Surat03
Route::resource('surat03', 'Surat03Controller');
Route::get('surat03/{surat03}/download', 'Surat03Controller@download')->name('surat03.download');

//Laporan_keuangan03
Route::get('/laporan_keuangan03', 'Iuran03Controller@laporan')->name('laporan03');

//laporan_surat03
Route::get('/laporan_surat03', 'Surat03Controller@laporan')->name('surat03');

//laporan_data03
Route::get('/laporan_data03', 'Warga03Controller@laporan')->name('warga03');


//Data RW 03
Route::resource('datarw03', 'Datarw03Controller');

//Iuran RW 03
Route::resource('iuranrw03', 'Iuranrw03Controller');

//Surat RW 03
Route::resource('suratrw03', 'Suratrw03Controller');
Route::resource('user', 'UserController');
Route::get('suratrw03/{suratrw03}/download', 'Suratrw03Controller@download')->name('suratrw03.download');

//Laporan_keuanganrw03
Route::get('/laporan_keuanganrw03', 'Iuranrw03Controller@laporan')->name('iuranrw03');

//laporan_suratrw03
Route::get('/laporan_suratrw03', 'Suratrw03Controller@laporan')->name('suratrw03');

Route::get('/blank-page', function () {
    return view('adminlte.blank');
})->name('blank-page');

Route::get('/crud', function () {
    return view('adminlte.crud.index');
})->name('crud');

Route::get('/crud/create', function (

) {
    return view('adminlte.crud.create');
})->name('crud.create');

Route::get('/crud/edit', function () {
    return view('adminlte.crud.edit');
})->name('crud.edit');


