<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\Admin\MateriAdminController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataPenggunaController;
use App\Http\Controllers\Admin\KuisController;
use App\Http\Controllers\Admin\NilaiController;
use App\Http\Controllers\HalMateriController;
use App\Http\Controllers\HalKuisController;
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
//     return view('landing_page');
// })->name('landing.page');

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('landing_page');
    })->name('landing.page');
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    // Route::get('/materi', [halMateriController::class, 'index'])->name('halMateri.index');
    Route::resource('halMateri',HalMateriController::class);
    Route::resource('intiMateri',IntiMateriController::class);
    Route::post('/intiMateri/execute', 'IntiMateriController@execute')->name('intiMateri.execute');
    Route::get('/kuis', [halKuisController::class, 'index'])->name('halKuis.index');
    Route::get('/halKuis', [halKuisController::class, 'showKuis'])->name('halKuis.show');
    Route::match(['get', 'post'], '/halKuis/{score}/{user}', [NilaiController::class, 'storePoint'])->name('nilai.storePoint');
    

    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.'
    ], function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
        Route::get('materi', [MateriAdminController::class, 'index'])->name('materi.index');
        Route::resource('materi', MateriAdminController::class) ->name('index', 'materi');
        Route::resource('dataPengguna', DataPenggunaController::class) ->name('index', 'dataPengguna');
        Route::resource('kuis', KuisController::class) ->name('index', 'kuis');
        Route::resource('nilai', NilaiController::class) ->name('index', 'nilai');
        Route::get('/nilai-download',[NilaiController::class,'exportPDF'])->name('export.pdf');
        Route::get('halMateri', [HalMateriController::class, 'index'])->name('halMateri.index');
        Route::get('halKuis', [HalKuisController::class, 'index'])->name('halKuis.index');
        // Route::get('mahasiswa/{id}', [MahasiswaController::class, 'detail'])->name('mahasiswa.details');
    });
});