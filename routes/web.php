<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\SettingsController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');
Route::post('/terms', [RegisterController::class, 'acceptTerms']);

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/register', 'Auth\RegisterController@index')->name('register');

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('/terms', 'auth.terms')->name('terms');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/income', [DashboardController::class, 'index'])->name('income');
Route::get('/income', 'IncomeController@index')->name('income');
Route::get('/income', [IncomeController::class, 'index'])->name('income');
Route::get('/expenses', [DashboardController::class, 'index'])->name('expenses');
Route::get('/expenses', 'ExpensesController@index')->name('expenses');
Route::get('/expenses', [ExpensesController::class, 'index'])->name('expenses');
Route::get('/settings', [DashboardController::class, 'index'])->name('settings');
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/transactions', [DashboardController::class, 'index'])->name('transactions');
Route::get('/transactions', 'TransactionsController@index')->name('transactions');
Route::get('/transactions', [TransactionsController::class, 'index'])->name('transactions');
Route::get('/filter_transactions', 'TransactionController@filterTransactions')->name('filter_transactions');

// Define the route for the password reset link request form
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

// Define the route for submitting the password reset link request form
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

// Define the route for the password reset form
Route::get('password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');

// Define the route for submitting the password reset form
Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');
