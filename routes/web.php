<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\LoanTypeController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/profil',[AdminController::class,'profil'])->name('admin.profile');
    Route::post('/admin/profil/update',[AdminController::class,'update'])->name('admin.update.profile');
    Route::post('/admin/profil/updatepassword',[AdminController::class,'updatepassword'])->name('admin.update.password');
    Route::get('/admin/profil/update',[AdminController::class,'storepassword'])->name('admin.update.store');

    Route::get('/admin/all/users',[AllUserController::class,'index'])->name('admin.all.user');
    Route::get('/admin/user/detail/{id}',[AllUserController::class,'detailUser'])->name('admin.detail.user');
    Route::post('/admin/user/detail/{id}/toggle-role',[AllUserController::class,'toggleRole'])->name('admin.toggle.role');
    Route::post('/admin/user/detail/{id}/toggle-status',[AllUserController::class,'toggleStatus'])->name('admin.toggle.status');
    Route::delete('/admin/all/users/{id}',[AllUserController::class,'deleteUser'])->name('admin.delete.user');

    Route::get('/admin/all/loan_type',[LoanTypeController::class,'allLoan'])->name('admin.all.loan_type');
    Route::post('/admin/all/loan_type/add',[LoanTypeController::class,'addLoan'])->name('admin.add.loan_type');
    Route::delete('/admin/all/loan_type/{id}',[LoanTypeController::class,'deleteLoan'])->name('admin.delete.loan_type');
    Route::get('/admin/all/loan_type/{id}/edit',[LoanTypeController::class,'editLoan'])->name('admin.edit.loan_type');
    Route::post('/admin/all/loan_type/update/{id}',[LoanTypeController::class,'updateLoan'])->name('admin.update.loan_type');
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('/user/profil',[UserController::class,'profil'])->name('user.profile');
    Route::post('/user/profil/update',[UserController::class,'update'])->name('user.update.profile');
    Route::get('/user/profil/update',[UserController::class,'storepassword'])->name('user.update.store');
    Route::post('/user/profil/updatepassword',[UserController::class,'updatepassword'])->name('user.update.password');
});



require __DIR__.'/auth.php';
