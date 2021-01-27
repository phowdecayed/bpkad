<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

/* FRONT END */
// Home
Route::get('/', 'App\Http\Controllers\Home@index');
Route::get('home', 'App\Http\Controllers\Home@index');
Route::get('kontak', 'App\Http\Controllers\Home@kontak');
Route::get('tentang', 'App\Http\Controllers\Home@tentang');
// Login
Route::get('login', 'App\Http\Controllers\Login@index');
Route::post('login/check', 'App\Http\Controllers\Login@check');
Route::get('login/lupa', 'App\Http\Controllers\Login@forgot');
Route::get('login/logout', 'App\Http\Controllers\Login@logout');
// Berita
Route::get('berita', 'App\Http\Controllers\Berita@index');
Route::get('berita/read/{par1}', 'App\Http\Controllers\Berita@read');
Route::get('berita/layanan/{par1}', 'App\Http\Controllers\Berita@layanan');
Route::get('berita/terjadi/{par1}', 'App\Http\Controllers\Berita@terjadi');
Route::get('berita/kategori/{par1}', 'App\Http\Controllers\Berita@kategori');
// download
Route::get('download', 'App\Http\Controllers\Download@index');
Route::get('download/unduh/{par1}', 'App\Http\Controllers\Download@unduh');
Route::get('download/kategori/{par1}', 'App\Http\Controllers\Download@kategori');
Route::get('dokumen', 'App\Http\Controllers\Download@index');
Route::get('dokumen/unduh/{par1}', 'App\Http\Controllers\Download@unduh');
Route::get('dokumen/detail/{par1}/{par2}', 'App\Http\Controllers\Download@detail');
Route::get('download/detail/{par1}/{par2}', 'App\Http\Controllers\Download@detail');
// galeri
Route::get('galeri', 'App\Http\Controllers\Galeri@index');
Route::get('galeri/detail/{par1}', 'App\Http\Controllers\Galeri@detail');
// video
Route::get('video', 'App\Http\Controllers\Video@index');
Route::get('video/detail/{par1}', 'App\Http\Controllers\Video@detail');
Route::get('webinar', 'App\Http\Controllers\Video@index');
Route::get('webinar/detail/{par1}/{par2}', 'App\Http\Controllers\Video@detail');
/* END FRONT END */
/* BACK END */

// dasbor
Route::get('admin/dasbor', 'App\Http\Controllers\Admin\Dasbor@index');
Route::get('admin/dasbor/konfigurasi', 'App\Http\Controllers\Admin\Dasbor@konfigurasi');
// user
Route::get('admin/user', 'App\Http\Controllers\Admin\User@index');
Route::post('admin/user/tambah', 'App\Http\Controllers\Admin\User@tambah');
Route::get('admin/user/edit/{par1}', 'App\Http\Controllers\Admin\User@edit');
Route::post('admin/user/proses_edit', 'App\Http\Controllers\Admin\User@proses_edit');
Route::get('admin/user/delete/{par1}', 'App\Http\Controllers\Admin\User@delete');
Route::post('admin/user/proses', 'App\Http\Controllers\Admin\User@proses');
// konfigurasi
Route::get('admin/konfigurasi', 'App\Http\Controllers\Admin\Konfigurasi@index');
Route::get('admin/konfigurasi/logo', 'App\Http\Controllers\Admin\Konfigurasi@logo');
Route::get('admin/konfigurasi/profil', 'App\Http\Controllers\Admin\Konfigurasi@profil');
Route::get('admin/konfigurasi/icon', 'App\Http\Controllers\Admin\Konfigurasi@icon');
Route::get('admin/konfigurasi/email', 'App\Http\Controllers\Admin\Konfigurasi@email');
Route::get('admin/konfigurasi/gambar', 'App\Http\Controllers\Admin\Konfigurasi@gambar');
Route::post('admin/konfigurasi/proses', 'App\Http\Controllers\Admin\Konfigurasi@proses');
Route::post('admin/konfigurasi/proses_logo', 'App\Http\Controllers\Admin\Konfigurasi@proses_logo');
Route::post('admin/konfigurasi/proses_icon', 'App\Http\Controllers\Admin\Konfigurasi@proses_icon');
Route::post('admin/konfigurasi/proses_email', 'App\Http\Controllers\Admin\Konfigurasi@proses_email');
Route::post('admin/konfigurasi/proses_gambar', 'App\Http\Controllers\Admin\Konfigurasi@proses_gambar');
Route::post('admin/konfigurasi/proses_profil', 'App\Http\Controllers\Admin\Konfigurasi@proses_profil');
// berita
Route::get('admin/berita', 'App\Http\Controllers\Admin\Berita@index');
Route::get('admin/berita/cari', 'App\Http\Controllers\Admin\Berita@cari');
Route::get('admin/berita/status_berita/{par1}', 'App\Http\Controllers\Admin\Berita@status_berita');
Route::get('admin/berita/kategori/{par1}', 'App\Http\Controllers\Admin\Berita@kategori');
Route::get('admin/berita/jenis_berita/{par1}', 'App\Http\Controllers\Admin\Berita@jenis_berita');
Route::get('admin/berita/author/{par1}', 'App\Http\Controllers\Admin\Berita@author');
Route::get('admin/berita/tambah', 'App\Http\Controllers\Admin\Berita@tambah');
Route::get('admin/berita/edit/{par1}', 'App\Http\Controllers\Admin\Berita@edit');
Route::get('admin/berita/delete/{par1}/{par2}', 'App\Http\Controllers\Admin\Berita@delete');
Route::post('admin/berita/tambah_proses', 'App\Http\Controllers\Admin\Berita@tambah_proses');
Route::post('admin/berita/edit_proses', 'App\Http\Controllers\Admin\Berita@edit_proses');
Route::post('admin/berita/proses', 'App\Http\Controllers\Admin\Berita@proses');
Route::get('admin/berita/add', 'App\Http\Controllers\Admin\Berita@add');
// kategori
Route::get('admin/kategori', 'App\Http\Controllers\Admin\Kategori@index');
Route::post('admin/kategori/tambah', 'App\Http\Controllers\Admin\Kategori@tambah');
Route::post('admin/kategori/edit', 'App\Http\Controllers\Admin\Kategori@edit');
Route::get('admin/kategori/delete/{par1}', 'App\Http\Controllers\Admin\Kategori@delete');
// video
Route::get('admin/video', 'App\Http\Controllers\Admin\Video@index');
Route::get('admin/video/edit/{par1}', 'App\Http\Controllers\Admin\Video@edit');
Route::post('admin/video/tambah', 'App\Http\Controllers\Admin\Video@tambah');
Route::post('admin/video/proses_edit', 'App\Http\Controllers\Admin\Video@proses_edit');
Route::get('admin/video/delete/{par1}', 'App\Http\Controllers\Admin\Video@delete');
Route::post('admin/video/proses', 'App\Http\Controllers\Admin\Video@proses');
// kategori_download
Route::get('admin/kategori_download', 'App\Http\Controllers\Admin\Kategori_download@index');
Route::post('admin/kategori_download/tambah', 'App\Http\Controllers\Admin\Kategori_download@tambah');
Route::post('admin/kategori_download/edit', 'App\Http\Controllers\Admin\Kategori_download@edit');
Route::get('admin/kategori_download/delete/{par1}', 'App\Http\Controllers\Admin\Kategori_download@delete');
// kategori_galeri
Route::get('admin/kategori_galeri', 'App\Http\Controllers\Admin\Kategori_galeri@index');
Route::post('admin/kategori_galeri/tambah', 'App\Http\Controllers\Admin\Kategori_galeri@tambah');
Route::post('admin/kategori_galeri/edit', 'App\Http\Controllers\Admin\Kategori_galeri@edit');
Route::get('admin/kategori_galeri/delete/{par1}', 'App\Http\Controllers\Admin\Kategori_galeri@delete');
// galeri
Route::get('admin/galeri', 'App\Http\Controllers\Admin\Galeri@index');
Route::get('admin/galeri/cari', 'App\Http\Controllers\Admin\Galeri@cari');
Route::get('admin/galeri/status_galeri/{par1}', 'App\Http\Controllers\Admin\Galeri@status_galeri');
Route::get('admin/galeri/kategori/{par1}', 'App\Http\Controllers\Admin\Galeri@kategori');
Route::get('admin/galeri/tambah', 'App\Http\Controllers\Admin\Galeri@tambah');
Route::get('admin/galeri/edit/{par1}', 'App\Http\Controllers\Admin\Galeri@edit');
Route::get('admin/galeri/delete/{par1}', 'App\Http\Controllers\Admin\Galeri@delete');
Route::post('admin/galeri/tambah_proses', 'App\Http\Controllers\Admin\Galeri@tambah_proses');
Route::post('admin/galeri/edit_proses', 'App\Http\Controllers\Admin\Galeri@edit_proses');
Route::post('admin/galeri/proses', 'App\Http\Controllers\Admin\Galeri@proses');
// site
Route::get('admin/site', 'App\Http\Controllers\Admin\Site@index');
Route::get('admin/site/cari', 'App\Http\Controllers\Admin\Site@cari');
Route::get('admin/site/status_site/{par1}', 'App\Http\Controllers\Admin\Site@status_site');
Route::get('admin/site/kategori/{par1}', 'App\Http\Controllers\Admin\Site@kategori');
Route::get('admin/site/detail/{par1}', 'App\Http\Controllers\Admin\Site@detail');
Route::get('admin/site/tambah', 'App\Http\Controllers\Admin\Site@tambah');
Route::get('admin/site/edit/{par1}', 'App\Http\Controllers\Admin\Site@edit');
Route::get('admin/site/status/{par1}', 'App\Http\Controllers\Admin\Site@status');
Route::get('admin/site/delete/{par1}', 'App\Http\Controllers\Admin\Site@delete');
Route::post('admin/site/tambah_proses', 'App\Http\Controllers\Admin\Site@tambah_proses');
Route::post('admin/site/edit_proses', 'App\Http\Controllers\Admin\Site@edit_proses');
Route::post('admin/site/proses', 'App\Http\Controllers\Admin\Site@proses');
// download
Route::get('admin/download', 'App\Http\Controllers\Admin\Download@index');
Route::get('admin/download/cari', 'App\Http\Controllers\Admin\Download@cari');
Route::get('admin/download/status_download/{par1}', 'App\Http\Controllers\Admin\Download@status_download');
Route::get('admin/download/kategori/{par1}', 'App\Http\Controllers\Admin\Download@kategori');
Route::get('admin/download/tambah', 'App\Http\Controllers\Admin\Download@tambah');
Route::get('admin/download/edit/{par1}', 'App\Http\Controllers\Admin\Download@edit');
Route::get('admin/download/unduh/{par1}', 'App\Http\Controllers\Admin\Download@unduh');
Route::get('admin/download/delete/{par1}', 'App\Http\Controllers\Admin\Download@delete');
Route::post('admin/download/tambah_proses', 'App\Http\Controllers\Admin\Download@tambah_proses');
Route::post('admin/download/edit_proses', 'App\Http\Controllers\Admin\Download@edit_proses');
Route::post('admin/download/proses', 'App\Http\Controllers\Admin\Download@proses');

/* END BACK END*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
