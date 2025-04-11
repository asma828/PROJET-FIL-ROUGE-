<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use NunoMaduro\Collision\Provider;
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
// admin routes
Route::middleware(['auth','role:admin'])->group(function () {
Route::get('/dashboard',[AdminController::class,'index'])->name('components.admin.dashboard');
Route::get('/users',[AdminController::class,'usersManagement'])->name('components.admin.UserManagement');
Route::get('/events',[AdminController::class,'events'])->name('components.admin.EventManagement');
Route::get('/category',[AdminController::class,'category'])->name('components.admin.CategoryManagement');
Route::get('/service',[AdminController::class,'service'])->name('components.admin.serviceProvider');
Route::get('/Payment',[AdminController::class,'Payment'])->name('components.admin.Payment');
});
//Provider routes
Route::middleware(['auth', 'role:provider'])->group(function () {
Route::get('/providerDashboard',[ProviderController::class,'dashboard'])->name('components.provider.dashboard');
Route::get('/Booking',[ProviderController::class,'Booking'])->name('components.provider.BookingManagement');
Route::get('/LiveChat',[ProviderController::class,'Chat'])->name('components.provider.Chat');
Route::get('/MyServices',[ProviderController::class,'services'])->name('components.provider.MyService');
Route::get('/Reviews',[ProviderController::class,'Reviews'])->name('components.provider.Reviews');
Route::get('/Profile',[ProviderController::class,'Profile'])->name('components.provider.Profile');
});
//authentification route
Route::get('/',[AuthController::class,'showRegister'])->name('show.register');
Route::post('/inscription', [AuthController::class, 'register'])->name('register');
Route::get('/login',[AuthController::class,'showLogin'])->name('components.auth.login');
Route::post('/Connexion', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// client routes
Route::middleware(['auth', 'role:client'])->group(function () {
Route::get('/home',[ClientController::class,'home'])->name('components.client.home');
Route::get('/providers',[ClientController::class,'listingProviders'])->name('components.client.providers');
Route::get('/details',[ClientController::class,'details'])->name('components.client.provider-details');
Route::get('/categories',[ClientController::class,'categories'])->name('components.client.categories');
Route::get('/creatEvent',[ClientController::class,'createvent'])->name('components.client.eventdetails');
Route::get('/selectProvider',[ClientController::class,'selectProvider'])->name('components.client.serviceProviderSelect');
Route::get('/invitation',[ClientController::class,'invitation'])->name('components.client.invitation');
Route::get('/payement',[ClientController::class,'payement'])->name('components.client.payement');
Route::get('/history',[ClientController::class,'History'])->name('components.client.EventHistory');
});





