<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardWorkController;
use App\Http\Controllers\DashboardApplyController;
use App\Http\Controllers\DashboardStartupController;
use App\Http\Controllers\DashboardProspectController;
use App\Models\Category;

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

Route::get('/', [NavbarController::class, 'homepage']);
Route::get('/startup', [NavbarController::class, 'startup']);
Route::get('/news', [NavbarController::class, 'news']);
Route::get('/karier', [NavbarController::class, 'karier']);
Route::get('/contact', [NavbarController::class, 'contact']);
Route::get('/categories', [NavbarController::class, 'categories']);

// Untuk Melihat Detail Jobs Prospect
Route::get('/detail_prospect/{prospect:slug}', [DetailController::class, 'detail_prospect']);
Route::get('news/{news:slug}', [DetailController::class, 'news_detail']);
Route::get('/detail_startup/{startup:slug}', [DetailController::class, 'detail_startup']);
Route::get('/detail_work/{work:slug}', [DetailController::class, 'detail_work']);
Route::get('/applywork/{work:slug}', [DetailController::class, 'form_karier']);
Route::post('/applywork', [DetailController::class, 'send_form']);

// ini buat sudah login
// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Halaman Dashboard Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index', [
            "active" => 'dashboard',
            "user" => User::all(),
            "categories" => Category::get()->count()
        ]);
    });

    // Halaman Admin Kelola Berita
    Route::resource('/dashboard/news', DashboardNewsController::class);
    Route::get('/dashboard/newss/checkSlug', [DashboardNewsController::class, 'checkSlug']);

    // Halaman Jobs Prospect
    Route::resource('/dashboard/prospect', DashboardProspectController::class);
    Route::get('/dashboard/prospects/checkSlug', [DashboardProspectController::class, 'checkSlug']);

    // Halaman Startup
    Route::resource('/dashboard/startup', DashboardStartupController::class);
    Route::get('/dashboard/startupss/checkSlug', [DashboardStartupController::class, 'checkSlug']);

    // Dashboard Work
    Route::resource('/dashboard/work', DashboardWorkController::class);
    Route::get('/dashboard/works/checkSlug', [DashboardWorkController::class, 'checkSlug']);

    Route::resource('/dashboard/user', DashboardUserController::class);

    // Halaman Dashboard Admin
    Route::resource('/dashboard/register', AdminRegisterController::class);

    // Halaman categories
    Route::resource('/dashboard/categories', AdminCategoryController::class);
    Route::get('/dashboard/categorie/checkSlug', [AdminCategoryController::class, 'checkSlug']);

    // Halaman apply work
    Route::resource('/dashboard/apply', DashboardApplyController::class);
});
