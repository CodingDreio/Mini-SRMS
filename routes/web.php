<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::permanentRedirect('/admin', '/');
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/admin/employees', [AdminController::class, 'adminEmployees'])->name('admin.employees');
Route::get('/admin/employees/add', [AdminController::class, 'adminAddEmployees'])->name('admin.addEmployees');
Route::get('/admin/employees/update/{id}', [AdminController::class, 'adminUpdateEmployees'])->name('admin.UpdateEmployees');

Route::get('/admin/notification', [AdminController::class, 'adminNotification'])->name('admin.notification');