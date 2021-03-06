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

// Route::get('/', function () {
//     return view('index');
// });
Route::auth(); 
Route::get('/home','HomeController@index');
Route::get('datanasabah','CrudController@index');
Route::get('datanasabah/inputnasabah','CrudController@tambahdatanasabah')->name('in.datanb');
//     return view('datanasabah');    
// });

Route::get('/','HomeController@nasabah');
Route::post('/','HomeController@datanasabah')->name('data_nasabah');
Route::get('/home/produk','HomeController@produk');

Route::get('report','HomeController@report')->name('report');
Route::post('pembayaran/export','PembayaranController@export_excel')->name('export.pembayaran');
Route::post('pembayaran/export/barang','PembayaranController@export_excel_barang')->name('export.barang');


// Route::view('/welcome', 'welcome');

// Route::redirect('/', '/home');

Route::get('daftar-nasabah','NasabahController@index')->name('view_nb');
Route::get('nasabah/create','NasabahController@tambahdatanb')->name('formin_nb');
Route::post('nasabah/create','NasabahController@simpannb')->name('tambah_nb');
Route::get('edit','NasabahController@editnb')->name('form_edit');
Route::get('nasabah/{id}','NasabahController@edit')->name('edit_nb');
Route::put('nasabah/{id}','NasabahController@update')->name('update_nb');
Route::get('nasabah/delete/{id}','NasabahController@destroy')->name('delete_nb');
Route::get('barang','ProdukController@index')->name('view_barang');
Route::get('barang/tambahbrg','ProdukController@create')->name('tambah_brg');
Route::post('barang/create','ProdukController@store')->name('store_brg');
Route::get('barang/{id}','ProdukController@edit')->name('show_brg');
Route::put('barang/{id}','ProdukController@update')->name('update_brg');

// pinjam uang
Route::get('peminjaman_uang','PinjamUangController@index')->name('peminjamanu');
Route::get('peminjaman_uang/tambah_pinjaman','PinjamUangController@create')->name('tambah_pinjamu');
Route::get('peminjaman_uang/edit_pinjaman/{id}','PinjamUangController@edit')->name('edit.pinjamu');
Route::get('peminjaman_uang/delete/{id}','PinjamUangController@destroy')->name('delete.peminjaman_uang');
Route::post('peminjaman_uang/update','PinjamUangController@update')->name('update.pinjamu');

// pinjam barang
Route::get('pinjam_barang','Pinjam_brgController@index')->name('pinjam_brg');
Route::post('pinjam/barang/create','Pinjam_brgController@store')->name('store.pinjam_brg');
Route::get('pengembalian/barang/{id}','Pinjam_brgController@update')->name('pengembalian.barang');



// bayar pinjaman
// Route::get('pembayaran/export','PembayaranController@export_excel')->name('export.pembayaran');
Route::get('pembayaran','PembayaranController@index')->name('index.pembayaran');
Route::get('pembayaran/tambah_pembayaran/{id}','PembayaranController@create')->name('tambah.pembayaran');
Route::post('pembayaran/create','PembayaranController@store')->name('store.pembayaran');
Route::get('pembayaran/{id}','PembayaranController@edit')->name('edit.pembayaran');
Route::post('pembayaran/update','PembayaranController@update')->name('update.pembayaran');
Route::get('pembayaran/delete/{id}','PembayaranController@destroy')->name('delete.pembayaran');

Route::get('Setting','SettingController@index')->name('set');
Route::get('setting/create','SettingController@create')->name('setup');
Route::post('setting/create','SettingController@store')->name('storeset');
Route::get('user','UserController@index')->name('viewus');
Route::get('user/create','UserController@create')->name('createus');
Route::post('user/add','UserController@store')->name('storeus');
Route::get('pinjam_barang/create','Pinjam_brgController@create')->name('createpj');
Route::post('peminjaman_uang/create','PinjamUangController@store')->name('storepjuang');





