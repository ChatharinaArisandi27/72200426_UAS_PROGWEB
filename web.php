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
// Route::get('/home', function () {
//     return view('home', ['ck' => 'home']);
// });
Route::get('/account', function () {
    return view('account', ['ck' => 'account']);
});
Route::get('/products', function () {
    return view('products', ['ck' => 'products']);
});
Route::get('/report', function () {
    return view('report', ['ck' => 'report']);
});
Route::get('/koneksi', function () {
    return view('koneksi');
});
Route::get('/faker', function () {
    return view('MahasiswaSeeder');
});

// Route::get('/home', function () {
//     return view('homee');
// });
Route::get('/home', 'MahasiswaController@home');

Route::get('/mahasiswa', 'MahasiswaController@Mahasiswa');
Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');
Route::get('/mahasiswa/form', 'MahasiswaController@form');
Route::post('/mahasiswa/simpan', 'MahasiswaController@simpanmahasiswa');
Route::get('/mahasiswa/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa');
Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa');
Route::get('/mahasiswa/deletemahasiswa/{id}', 'MahasiswaController@deletemahasiswa');

Route::get('/dosen', 'DosenController@Dosen');
Route::get('/dosen/form', 'DosenController@form');
Route::get('/dosen/simpan', 'DosenController@simpan');
Route::get('/dosen/editdosen/{id}', 'DosenController@editdosen');
Route::put('/dosen/updatedosen/{id}', 'DosenController@updatedosen');

Route::get('/login', function () {
    return view('login');
});
Route::get('/user', 'AuthController@user');
Route::get('/user/form', 'AuthController@formuser');
Route::post('/user/form/simpan', 'AuthController@simpanUser');
Route::get('/user/edituser/{id}', 'AuthController@edituser');
Route::put('/user/updateuser/{id}', 'AuthController@UpdateUser');
Route::get('/user/deleteuser/{id}', 'AuthController@deleteUser');
Route::get('/', 'AuthController@Login');
Route::post('/user/ceklogin', 'AuthController@ceklogin');
Route::get('/logout', 'AuthController@logout');
