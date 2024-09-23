<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\web\WebContractController;
use App\Http\Controllers\web\WebServicesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\web\WebHomeController;
use App\Http\Controllers\web\WebNewController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home'])->name('home');
	
	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	
    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);

	Route::group(['middleware' => 'role:quản lý'], function () 
	{
	Route::get('/user-management',[InfoUserController::class, 'index'])->name('user.index');
	Route::get('/user-management/create',[InfoUserController::class, 'create'])->name('user.create');
	Route::post('/user-management',[InfoUserController::class, 'store'])->name('user.store');
	Route::get('/user-management/{id}',[InfoUserController::class, 'edit'])->name('user.edit');
	Route::put('/user-management/{id}',[InfoUserController::class, 'update'])->name('user.update');
	Route::delete('/user-management/{id}',[InfoUserController::class, 'destroy'])->name('user.destroy');
	});

	Route::get('/contract', [ContractController::class, 'create']);
	Route::delete('/contract/{id}', [ContractController::class, 'destroy'])->name('contract.destroy');

	Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
	Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
	Route::post('/services', [ServicesController::class, 'store'])->name('services.store');
	Route::get('/services/{id}', [ServicesController::class, 'edit'])->name('services.edit');
	Route::put('/services/{id}', [ServicesController::class, 'update'])->name('services.update');
	Route::delete('services/{id}', [ServicesController::class, 'destroy'])->name('services.destroy');

	Route::get('/new', [NewController::class, 'index'])->name('new.index');
	Route::get('/new/create', [NewController::class, 'create'])->name('new.create');
	Route::post('/new', [NewController::class, 'store'])->name('new.store');
	Route::get('/new/{id}', [NewController::class, 'edit'])->name('new.edit');
	Route::put('/new/{id}', [NewController::class, 'update'])->name('new.update');
	Route::delete('new/{id}', [NewController::class, 'destroy'])->name('new.destroy');
	



	
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');


// web
Route::get('/trangchu', [WebHomeController::class, 'create'])->name('index');
Route::post('/contact', [WebHomeController::class, 'store'])->name('contacts.store');


Route::get('/tintuc', [WebNewController::class, 'index'])->name('webnew.index');
Route::get('/tintuc/{id}', [WebNewController::class, 'shownews'])->name('webnew.show');



Route::get('about', function () {
	return view('web/about');
})->name('about');

Route::get('/lienhe', [WebContractController::class, 'create']);
Route::post('/lienhe', [WebContractController::class, 'store'])->name('contract.store');
	
Route::get('/baiviet', [WebServicesController::class, 'create'])->name('webservices.index');
Route::get('/baiviet/{id}', [WebServicesController::class, 'show'])->name('webservices.show');


Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

Route::post('/contacts/process/{id}', [ContactController::class, 'process'])->name('contacts.process');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');


