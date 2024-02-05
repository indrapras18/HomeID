<?php

use App\Http\Controllers\ArticleController;
use App\Models\Perumahan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\DeskripsiController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserMobileController;
use App\Models\Daerah;
use App\Models\Deskripsi;
use App\Models\Komentar;
use App\Models\Rumah;

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

Route::get('/', [PerumahanController::class, 'index']
);

Route::get('/login', [PerumahanController::class, 'loginView']);
Route::get('/dashboard', [PerumahanController::class, 'adminView']);
Route::get('/index', [ArticleController::class, 'show'])->name('index');
Route::post('/add',[KomentarController::class, 'add'])->name('add');
Route::post('/tambahdata', [DetailController::class, 'tambahdata'])->name('tambahdata');
Route::post('/addDaerah', [DaerahController::class, 'addDaerah'])->name('addDaerah');
Route::post('/addrumah', [RumahController::class, 'addrumah'])->name('addrumah');
Route::get('updateprofile', [ProfileController::class, 'edit'])->name('updateprofile');
Route::put('updateprof', [ProfileController::class, 'updateprof'])->name('updateprof');
Route::delete('deleteprofile', [ProfileController::class, 'deleteprofile'])->name('deleteprofile');

//routes login
Auth::routes();


//routes dashboard
Route::get('profile', [PerumahanController::class, 'profile'])->name('profile');

Route::get('userL', [PerumahanController::class, 'userLogin'])->name('userL');

Route::get('userR', [PerumahanController::class, 'userRegister'])->name('userR');

Route::get('tambahdata', [PerumahanController::class, 'tambahdata'])->name('tambahdata');

Route::post('adduser', [UserMobileController::class, 'adduser'])->name('adduser');

Route::get('article', [ArticleController::class, 'article'])->name('article');

Route::get('/tbartikel', [ArticleController::class, 'tbartikel'])->name('tbartikel');

Route::post('createarticle', [ArticleController::class, 'createarticle'])->name('createarticle');

Route::get('bacaarticle/{id}', [ArticleController::class, 'bacaarticle'])->name('bacaarticle');

Route::get('updatearticle/{id}', [ArticleController::class, 'updatearticle'])->name('updatearticle');

Route::get('deleteaerticle/{id}', [ArticleController::class, 'deleteaerticle'])->name('deleteaerticle');

Route::post('updatedata/{id}', [ArticleController::class, 'updatedata'])->name('updatedata');

Route::get('/deskripsi', [DeskripsiController::class, 'deskripsi'])->name('deskripsi');

Route::get('tampildata/{id}', [KomentarController::class, 'tampildata'])->name('tampildata');

Route::post('/updatekomentar/{id}', [KomentarController::class, 'updatekomentar'])->name('updatekomentar');

Route::get('updatedetail/{id}', [DetailController::class, 'updatedetail'])->name('updatedetail');

Route::get('hapus/{id}', [DetailController::class, 'hapus'])->name('hapus');

Route::get('updatedaerah/{id}', [DaerahController::class, 'updatedaerah'])->name('updatedaerah');

Route::get('deletedaerah/{id}', [DaerahController::class, 'deletedaerah'])->name('deletedaerah');

Route::post('/updatedetails/{id}', [DetailController::class, 'updatedetails'])->name('updatedetails');

Route::post('/updateuser/{id}', [UserMobileController::class, 'updateuser'])->name('updateuser');

Route::get('/tampilupdateuser/{id}', [UserMobileController::class, 'tampilupdateuser'])->name('tampilupdateuser');

Route::get('delete/{id}', [UserMobileController::class, 'delete'])->name('delete');

Route::get('deletekomentar/{id}', [KomentarController::class, 'deletekomentar'])->name('deletekomentar');

Route::get('deleterumah/{id}', [RumahController::class, 'deleterumah'])->name('deleterumah');


Route::get('updatedeskripsi/{id}', [DeskripsiController::class, 'updatedeskripsi'])->name('updatedeskripsi');

Route::post('update/{id}', [DeskripsiController::class, 'update'])->name('user.update');

Route::middleware(['auth'])->group(function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('tbdetail', [PerumahanController::class, 'tbdetail'])->name('tbdetail');

Route::get('tbdaerah', [DaerahController::class, 'tbdaerah'])->name('tbdaerah');

Route::get('tbpengurus', [PerumahanController::class, 'tbpengurus'])->name('tbpengurus');

Route::get('tbrumah', [RumahController::class, 'tbrumah'])->name('tbrumah');

// Route::get('tbuser', [UserMobileController::class, 'datauser'])->name('tbuser');

Route::get('tbuser', [UserMobileController::class, 'datauser'])->name('tbuser');

Route::get('tbkomentar', [PerumahanController::class, 'tbkomentar'])->name('tbkomentar');

Route::get('status/{id}', [RumahController::class, 'status']);

Route::get('/updaterumah', [RumahController::class, 'updaterumah'])->name('updaterumah');

Route::get('/tambahrumah', [RumahController::class, 'tambahrumah'])->name('tambahrumah');

Route::get('/name', [RumahController::class, 'name'])->name('name');

Route::get('/tampilupdate/{id}', [RumahController::class, 'tampilupdate'])->name('tampilupdate');

Route::post('/updaterumah/{id}', [RumahController::class, 'updaterumah'])->name('updaterumah');


});

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/index');
});
