<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DownloadFileController;
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
Route::get('/book/1', [CommunityController::class, 'viewDetail'])->name('detail');
Route::get('/login', [CommunityController::class, 'viewloginPage']);


Route::get('/admin', [StaffController::class, 'viewLandingPage']);
Route::get('/uploadbook', [StaffController::class, 'viewUploadBook']);
Route::post('/uploadbook', [StaffController::class, 'submitUploadBook']);


Route::get('/project-guidance', function () {
    return view('project-guidance');
});

Route::get('downloadfile', [DownloadFileController::class, 'downloadFile'])->name('download');

Route::get('testDB', function () {

    $books = DB::table('book')->get();

    return view('community.details', ['books' => $books]);
});
