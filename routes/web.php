<?php

//namespace App\Mail;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxContactController;
use App\Mail\MyTestMail;

use Illuminate\Http\Request;



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

Route::get('/users', function () {
    return view('users');
});

Route::get('/quotations', function () {
    return view('quotations');
});

Route::get('/clients',[Clients::class,'index'])->name('clients');

Route::get('/products', function () {
    return view('products');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/smtp', function () {
    return view('smtp');
})->name('smtp');

Route::get('/company-profile', [Companyprofile::class,'index'])->name('company-profile');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::post('/store', [AjaxContactController::class, 'store'])->name('store');
