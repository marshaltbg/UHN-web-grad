<?php
//use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    if(Auth::user()!=null){
        return view('dashboard');
    }else{
        return redirect("login");
    }
});

Route::get('/admin', function () {
    return view('index');
});

//route for pengumuman
Route::get('/pengumuman',[PengumumanController::class, 'index']);
Route::get('/tambah-pengumuman', function () {
    return view('pengumuman.tambah');
});
Route::post('/pengumuman-store', [PengumumanController::class, 'store']);
Route::post('/pengumuman-content', [PengumumanController::class, 'detail']);
Route::post('/pengumuman-edit', [PengumumanController::class, 'edit']);
Route::post('/pengumuman-update', [PengumumanController::class, 'update']);
Route::post('/pengumuman-delete', [PengumumanController::class, 'delete']);



Route::get('/mahasiswa', [DataMahasiswaController::class, 'index']);
Route::post('/import-wisudawan', [DataMahasiswaController::class, 'importData']);
Route::post('/wisudawan-faculty', [DataMahasiswaController::class, 'filterByFaculty']);
Route::post('/wisudawan-prodi', [DataMahasiswaController::class, 'filterByProdi']);


Route::get('/admin-register', [UserController::class, 'openForm']);
Route::post('/admin-store', [UserController::class, 'registerAdmin']);
Route::post('/register-wisudawan', [UserController::class, 'registerMahasiswa']);
Route::get('/register-form', [UserController::class, 'registerForm']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('login');
});

Route::get('/upload', [UploadController::class, 'index']);
Route::post('/upload-artefak', [UploadController::class, 'uploadArtefak']);
Route::post('/upload-file-ppkha', [UploadController::class, 'uploadPPKHA']);
Route::post('/upload-bebas-sanksos', [UploadController::class, 'uploadSanksos']);
Route::post('/upload-pernyataan-baaf', [UploadController::class, 'uploadBaaf']);
Route::post('/upload-foto', [UploadController::class, 'uploadFoto']);
Route::post('/detail-wisudawan', [UploadController::class, 'getDetailWisudawan']);
Route::post('/detail-dokumen', [UploadController::class, 'detailDokumen']);

