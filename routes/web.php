<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\jenis_keseniancontroller;
use App\Http\Controllers\pengajuancontroller;
use App\Http\Controllers\aktivitassanggarcontroller;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DaftarKaryaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\subkeseniancontroller;
use App\Http\Controllers\dapenduk_jenis_kelamin_controller;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'ceklevel:admin,user,pemilik_sanggar,kepala_desa']], function () {
    Route::get('/Dashboard', [dashboardcontroller::class, "index"])->name('index');

    //Data Kependudukan
    Route::get('/Data-Penduduk', [dashboardcontroller::class, "data"])->name('data');
    Route::get('/Berdasarkan-Jenis-Kelamin', [dapenduk_jenis_kelamin_controller::class, "index"])->name('index');
    Route::get('/Tambah-Data', [dapenduk_jenis_kelamin_controller::class, "create"])->name('create');
    Route::post('/Tambah-Data', [dapenduk_jenis_kelamin_controller::class, "store"])->name('store');
    Route::get('/Update-Data/{id}', [dapenduk_jenis_kelamin_controller::class, "edit"])->name('edit');
    Route::post('/Update-Data', [dapenduk_jenis_kelamin_controller::class, "update"]);

    Route::get('/Dashboard/hapus/{id}', [sanggarcontroller::class, "destroy"]);
    Route::get('/Dashboard/{data}', [sanggarcontroller::class, "show"]);
    /////////
    Route::get('/Jenis-Kesenian', [jenis_keseniancontroller::class, "index"]);
    Route::get('/Jenis-Kesenian/{id}', [jenis_keseniancontroller::class, "show"]);
    Route::get('/Jenis-Kesenian-Create', [jenis_keseniancontroller::class, "jenis"]);
    /////////
    Route::get('/pengajuan', [pengajuancontroller::class, "index"]);
    // Route::get('/pengajuan', [pengajuancontroller::class, "code"]);
    Route::post('/pengajuan', [sanggarcontroller::class, "store"]);
    //////////
    Route::get('/aktivitas-sanggar', [AktivitassanggarController::class, "index"]);
    Route::get('/aktivitas-sanggar-create', [AktivitassanggarController::class, "create"]);
    Route::post('/aktivitas', [AktivitassanggarController::class, "store"]);
    //////////
    Route::put('/updateStatusSanggar/{id}', [sanggarcontroller::class, "changeStatusSanggar"])->name('updateStatusSanggar');
    //////////
    Route::get('/anggota', [AnggotaController::class, "index"]);
    Route::post('/anggota', [AnggotaController::class, "store"]);
    //////////
    Route::get('/input-karya', [DaftarKaryaController::class, "index"]);
    Route::post('/karya', [DaftarKaryaController::class, "store"]);

    Route::get('/kecamatan', [KecamatanController::class, "index"]);
    Route::get('/kecamatan-create', [KecamatanController::class, "create"]);
    Route::post('/kecamatan-create', [KecamatanController::class, "store"]);
    Route::get('/kecamatan-edit/{id}', [KecamatanController::class, "edit"]);
    Route::post('/kecamatan-update', [KecamatanController::class, "update"]);
    Route::get('/kecamatan/hapus/{id}', [KecamatanController::class, "destroy"]);

    Route::get('/sub-seni', [subkesenianController::class, "index"]);
    Route::get('/sub-seni-create', [subkesenianController::class, "create"]);
    Route::post('/sub-seni-create', [subkesenianController::class, "store"]);
    Route::get('/sub-seni-create/hapus/{id}', [subkesenianController::class, "destroy"]);

    Route::get('/list-user', [AuthController::class, "index"]);
});

Route::get('/', [AuthController::class, "loginView"]);
Route::get('/Register', [AuthController::class, "registerView"]);
Route::post('/do-login', [AuthController::class, "doLogin"]);
Route::post('/do-register', [AuthController::class, "doRegister"]);

Route::get('/Logout', [AuthController::class, "logout"]);



