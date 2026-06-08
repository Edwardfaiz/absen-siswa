<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\KelasController;
use App\Http\Controllers\DispenController;

/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| HALAMAN SISWA
|--------------------------------------------------------------------------
*/

Route::get('/pengajuan', function () {
    return view('dispen.create');
});

/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {

    if (
        $request->username == 'admin' &&
        $request->password == '123'
    ) {

        return redirect('/dispen');
    }

    return back()->with('error', 'Login gagal');

});

/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::get('/logout', function () {

    session()->flush();

    return redirect('/login');

});

/*
|--------------------------------------------------------------------------
| DISPEN ADMIN
|--------------------------------------------------------------------------
*/

Route::resource('dispen', DispenController::class);

Route::post('/dispen/status/{id}', [DispenController::class, 'updateStatus']);

Route::get('/dispen/cetak/{id}', [DispenController::class, 'cetak']);

/*
|--------------------------------------------------------------------------
| DATA KELAS
|--------------------------------------------------------------------------
*/

Route::resource('kelas', KelasController::class);
Route::get('/dispen/cetak/{id}', [DispenController::class, 'cetak']);
Route::get('/siswa', [DispenController::class, 'siswa']);
Route::get('/siswa', [DispenController::class, 'siswa']);