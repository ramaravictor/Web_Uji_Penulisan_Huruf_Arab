<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SignaturePadController;
use App\Http\Controllers\DashboardMateriController;
use App\Http\Controllers\DashboardSoalController;
use App\Http\Controllers\DashboardSantriController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardNilaiController;
use App\Models\kategori;
use App\Models\Soal;

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
    return view('home', [
        "title" => "Home",
        "active" => 'home',
    ]);
})->middleware('auth');


//halaman jilid
Route::get('/kategorimateri', function () {
    return view('kategorimateri', [
        'title' => 'Materi',
        "active" => 'materi',
        'kategori' => kategori::all(),

    ]);
})->middleware('auth');

Route::get('/kategorimateri/{kategori:slug}', function (kategori $kategori) {
    return view('kategori', [
        'title' => $kategori->jilid,
        "active" => 'materi',
        'materi' => $kategori->materi,
        'kategori' => $kategori->jilid,

    ]);
})->middleware('auth');

// halaman materi
// Route::get('/materi', [MateriController ::class, 'index']);

//halaman single materi
Route::get('/materi/{materi:slug}', [MateriController::class, 'show']);


//halaman ujian

Route::get('/ujian', function () {
    return view('ujian', [
        "title" => "Ujian",
        "active" => 'ujian',
        'ujian' => kategori::all(),
    ]);
})->middleware('auth');


Route::get('/ujian/{kategori:slug}', function (kategori $kategori) {
    return view('kategoriujian', [
        'title' => $kategori->jilid,
        "active" => 'ujian',
        'soal' => $kategori->soal,
        'kategori' => $kategori->jilid,

    ]);
    // $kategori = Soal::latest()->when(request()->q, function($kategori) {
    //     $kategori = $kategori->where('detail', 'like', '%'. request()->q . '%');
    // })->paginate(10);
    // return view('kategoriujian', compact('kategori'));

})->middleware('auth');


//halaman soal
//Route::get('/soal', [SoalController ::class, 'index']);
Route::get('/soalujian/{soal:id}', [SoalController::class, 'show'])->middleware('auth');

//halaman nilai
Route::get('/nilai', [NilaiController::class, 'index'])->middleware('auth');

//jawaban nulis
Route::post('soal', [SoalController::class, 'upload'])->name('jawab.upl');





Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('ustadz');

Route::resource('/dashboard/materi', DashboardMateriController::class)
    ->middleware('ustadz');

Route::resource('/dashboard/soal', DashboardSoalController::class)
    ->middleware('ustadz');

Route::resource('/dashboard/santri', DashboardSantriController::class)
    ->middleware('ustadz');

Route::resource('/dashboard/ustadz', DashboardUstadzController::class)
    ->middleware('ustadz');
    
Route::resource('/dashboard/user', DashboardUserController::class)
    ->middleware('ustadz');

Route::resource('/dashboard/nilai', DashboardNilaiController::class)
    ->middleware('ustadz');


Route::get('/signature-pad', [SignaturePadController::class, 'index']);
Route::post('/signature-pad', [SignaturePadController::class, 'save'])->name('signpad.save');
