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

// php artisan server ==> http://localhost:8000/
// php -S 192.168.43.108:8000 -t public

// Route::get('/', function () {
//     return view('admin.welcome');
// });

Route::get('/', function () {
    return view('client.welcome');
});

Route::get('/artikel', function () {
    return view('admin.page.index');
});

Route::get('/test', function () {
    $nama = 'Saya hasil url test';
    $alamat = 'padang';
    $data = ['satu', 'dua', 'tiga', 'emapt'];
    // 0, 1, 2, 3
    $dataInisial = ['nama' => 'budi', 'kelas' => 'tekom a', 'alamt' => 'padang'];
    // $dataInisial["nama"];
    $dataObject = (object) ['nama' => 'nofal', 'kelas' => 'mi a', 'alamt' => 'solok'];
    // $dataObject->nama
    $dataArrayObject = [
        (object) ['nama' => 'nofal1', 'kelas' => 'mi a', 'alamt' => 'solok'],
        (object) ['nama' => 'nofal2', 'kelas' => 'mi a', 'alamt' => 'solok'],
        (object) ['nama' => 'nofal2', 'kelas' => 'mi a', 'alamt' => 'solok'],
    ];
    // -> ->
    return view('test', compact('nama', 'alamat', 'data', 'dataInisial', 'dataObject', 'dataArrayObject'));
});

Route::get('/coba', function () {
    http://localhost:8000/coba
    return 'hello world';
});

// Controller
Route::get('/blog/{id}', 'TestController@index');
Route::post('/blog', 'TestController@post')->name('blog.post');
Route::put('/put/blog', 'TestController@update')->name('put.blog.post');

// Route::get('/artikel', 'TestController@index');
// Route::post('/crearte', 'TestController@crate');
// Route::post('/update', 'TestController@update');
// Route::post('/delete', 'TestController@delete');

// Route::get('/artikel', 'TestController@index');
// Route::post('/{id}', 'TestController@crate');
// Route::put('/{id}', 'TestController@update');
// Route::delete('/{id}', 'TestController@delete');
