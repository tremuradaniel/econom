<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\AccountController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/php_info', function () {
    return view('dev.php_info');
})->name('dev.phpInfo');

Route::middleware(['auth:sanctum', 'verified'])->get('accounts', [AccountController::class, 'index'])->name('account.index');
Route::middleware(['auth:sanctum', 'verified'])->get('accounts/create', [AccountController::class, 'create'])->name('account.create');
Route::middleware(['auth:sanctum', 'verified'])->get('accounts/create_form_data', [AccountController::class, 'createFormData'])->name('account.create_form_data');
Route::middleware(['auth:sanctum', 'verified'])->post('accounts/create_account', [AccountController::class, 'store']);
