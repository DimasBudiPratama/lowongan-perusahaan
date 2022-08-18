<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\DashboardPostController;

/*
|-------------------------------------------------------------------------|
|                              Tampilan Front End                         |                  
|-------------------------------------------------------------------------|
*/





// Route::get('/', function () {
//     return view('home',[
//         "title" => "Home",
//     ]);
// });

// Route::get('/contact', function () {
//     return view('contact',[
//         "title" => "contact",
//     ]);
// });

// Route::get('/about', function () {
//     return view('about',[
//         "title" => "About",
//     ]);
// });



//Post
Route::get('/posts', [PostController::class,'index'])->middleware(["auth", "verified"]);
Route::get('/posts/{post:slug}', [PostController::class,'show'])->middleware(["auth", "verified"]); //{post:slug} post ngambil dari controller Post,slug data yang mau di ambil
 //{post:slug} post ngambil dari controller Post,slug data yang mau di ambil

//Profil
Route::get('/profil', [PelamarController::class,'index'])->middleware(["auth", "verified"]);
Route::patch('/profil/update', [PelamarController::class, 'update'])->middleware(["auth", "verified"]);
//Lamar
Route::get('/lamaran', [PelamarController::class, 'show'])->middleware(["auth", "verified"]);
// Route::get('/lamaran', [PelamarController::class, 'show'])->where('id', Auth::user()->id)->middleware(["auth", "verified"]);
// Route::get('/pelamar', [PelamarController::class,'lamar'])->middleware(["auth", "verified"]);

//Pelamar
Route::get('/pelamar/{post:slug}', [PostController::class,'lamar'])->middleware(["auth", "verified"]);
Route::post('/pelamar/update', [PostController::class, 'store'])->middleware(["auth", "verified"]);



Route::get('/categories', function() {
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);

Auth::routes(['verify' => true]);

// //Login
Route::get('/login/admin', [LoginController::class,'index'])->middleware('guest')->name('login.admin');
Route::post('/login/admin', [LoginController::class,'masuk']);
// Route::post('/logout', [LoginController::class,'keluar']);

// //Register
// Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class,'store']);




/*
|-------------------------------------------------------------------------|
|                              Tampilan Backend                           |                  
|-------------------------------------------------------------------------|
*/


//Dashboard
Route::get('/dashboard', [DashboardController::class, 'AdminHome'])->middleware('auth');

//Dashboard Post
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/posts/status', [DashboardPostController::class, 'gantiStatus'])->name('update.status')->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

//Lamaran
Route::get('/dashboard/lamaran', [LamarController::class, 'index'])->middleware(["auth"]);
Route::post('/dashboard/tolak/{id}', [LamarController::class, 'tolak'])->middleware(["auth"]);
// Route::get('/dashboard/jadwal/{id}', [LamarController::class, 'edit'])->middleware(["auth"]);
// Route::patch('/dashboard/jadwal/{id}', [LamarController::class, 'jadwal'])->middleware(["auth"]);
Route::resource('/dashboard/lamaran', LamarController::class)->middleware(["auth"]);
Route::get('/cetak', [LamarController::class, 'cetak'])->middleware(["auth"]);

//Jadwal
// Route::get('/dashboard/jadwal/{id}', [JadwalController::class, 'edit'])->middleware(["auth"]);
// Route::post('/dashboard/jadwal/ubah/{id}', [JadwalController::class, 'ubah'])->middleware(["auth"]);
Route::resource('/dashboard/jadwal', JadwalController::class)->middleware(["auth"]);

//Pendidikan
Route::resource('/pendidikan', PendidikanController::class)->middleware('hrd');

//Keahlian
Route::resource('/keahlian', KeahlianController::class)->middleware('hrd');

//User
Route::resource('/user', UserController::class)->middleware('hrd');

//Category
// Route::get('/category/checkSlug', [CategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/category', CategoryController::class)->middleware('hrd');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
