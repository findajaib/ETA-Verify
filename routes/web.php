<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('permissions', PermissionController::class);

Route::middleware('')->group(function () {
});
Route::get('users', [RegisteredUserController::class, 'index'])->name('user.index');
Route::get('user/create', [RegisteredUserController::class, 'create'])->name('user.create');
Route::post('user/create', [RegisteredUserController::class, 'store'])->name('user.store');
Route::get('users/{user}/edit', [RegisteredUserController::class, 'edit'])->name('user.edit');
Route::patch('users/{user}', [RegisteredUserController::class, 'update'])->name('user.update');
Route::delete('users/{user}', [RegisteredUserController::class, 'destroy'])->name('user.destroy');
Route::Post('assign-role/user/', [RegisteredUserController::class, 'assignRole'])->name('user.assignRole');
Route::get('user{user}/remove-role{role}/', [RegisteredUserController::class, 'removeRole'])->name('user.removeRole');
Route::resource('roles', RoleController::class);
Route::post('giveOrRevokePermission', [RoleController::class, 'giveOrRevokePermission'])->name('role.permission');
Route::get('{userGroup}/assignUserRole', [RoleControllerr::class, 'assignUserRole'])->name('user.role');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__ . '/auth.php';
