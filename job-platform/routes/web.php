<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//for admin 
Route::prefix('admin')->middleware(['auth' ,'isAdmin'])->group(function(){
Route::get('/home', [AdminHomeController::class, 'index'])->name('admin_home');
Route::get('/manageJob', [AdminHomeController::class, 'manageJob'])->name('admin_manageJob');
Route::get('/editJob/{id}', [AdminHomeController::class, 'editJob'])->name('editJob');
Route::post('/updateJob', [AdminHomeController::class, 'updateJob'])->name('updateJob');
Route::delete('/delete/{id}', [AdminHomeController::class, 'delete'])->name('delete');
Route::get('/indexaddJob', [AdminHomeController::class, 'indexaddJob'])->name('indexaddJob');
Route::post('/addJob', [AdminHomeController::class, 'addJob'])->name('addJob');
Route::get('/manageApplication', [AdminHomeController::class, 'manageApplication'])->name('manageApplication');
Route::get('/profileCandidate/{id}', [AdminHomeController::class, 'profileCandidate'])->name('profileCandidate');
Route::get('/updateStatusApprove/{id}', [AdminHomeController::class, 'updateStatusApprove'])->name('updateStatusApprove');
Route::get('/updateStatusReject/{id}', [AdminHomeController::class, 'updateStatusReject'])->name('updateStatusReject');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashbord', [HomeController::class, 'dashbord'])->name('dashbord');
Route::get('/jobDesc/{id}', [HomeController::class, 'jobDesc'])->name('jobDesc');
Route::get('/jobDesc/applyForm/{id}', [HomeController::class, 'applyForm'])->name('applyForm');
Route::post('/applySubmit', [HomeController::class, 'applySubmit'])->name('applySubmit');
Route::get('/messageSuccess', [HomeController::class, 'messageSuccess'])->name('message-success');
Route::get('/success', [HomeController::class, 'success'])->name('success');
Route::get('/userApplication', [HomeController::class, 'userApplication'])->name('userApplication');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::Post('/updateProfile', [HomeController::class, 'updateProfile'])->name('updateProfile');




