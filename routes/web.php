<?php

use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DownloadFileController;
use App\Http\Controllers\AdminAccountController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [CommunityController::class, 'viewLandingPage']);
Route::get('/book/{id}', [CommunityController::class, 'viewDetail'])->name('detail');

Route::get('/delete-bookmark/{id}', [BookmarksController::class, 'deleteBookmark'])->name('delete-bookmark');
Route::get('/set-bookmark/{id}', [BookmarksController::class, 'setBookmark'])->name('set-bookmark');
Route::get('/login', [CommunityController::class, 'viewloginPage']);


Route::get('/admin', [StaffController::class, 'viewLandingPage']);
Route::get('/uploadbook', [StaffController::class, 'viewUploadBook']);
Route::get('/editbook/{id}', [StaffController::class, 'editBook']);
Route::post('/editbook/{id}', [StaffController::class, 'editBookP']);
Route::post('/uploadbook', [StaffController::class, 'submitUploadBook']);

Route::get('/bookmarks', [BookmarksController::class, 'viewBookmarkPage']);

Route::get('/project-guidance', function () {
    return view('project-guidance');
});

Route::get('downloadfile', [DownloadFileController::class, 'downloadFile'])->name('download');

Route::get('/add-account', [AdminAccountController::class, 'viewAdminAccount']);
Route::post('/add-account', [AdminAccountController::class, 'addAdminAccount'])->name('addAccount');

require __DIR__ . '/auth.php';

/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
load');

require __DIR__.'/auth.php';

*/
