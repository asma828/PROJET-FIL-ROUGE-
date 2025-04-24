<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceImageController;
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
Route::delete('/user/{id}', [AdminController::class, 'destroy'])->name('user.destroy');
Route::get('/events',[AdminController::class,'events'])->name('components.admin.EventManagement');
Route::delete('/event/{id}', [ReservationController::class, 'destroy'])->name('event.delete');
Route::get('/category',[EventCategoryController::class,'category'])->name('components.admin.CategoryManagement');
Route::delete('/category/{id}', [EventCategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/service',[AdminController::class,'service'])->name('components.admin.serviceProvider');
Route::get('/Payment',[AdminController::class,'Payment'])->name('components.admin.Payment');
});
//Provider routes
Route::middleware(['auth', 'role:provider'])->group(function () {
Route::get('/providerDashboard/{providerId}', [ProviderController::class, 'dashboard'])->name('components.provider.dashboard');
Route::get('/Booking',[ReservationController::class,'Booking'])->name('components.provider.BookingManagement');
Route::get('/LiveChat',[ProviderController::class,'Chat'])->name('components.provider.Chat');
Route::get('/my-service', [ServiceController::class, 'show'])->name('components.provider.MyService');
Route::post('/services', [ServiceController::class, 'store'])->name('services');
Route::post('/service/{id}/images', [ServiceImageController::class, 'store'])->name('service.images.store');
Route::delete('/service/images/{id}', [ServiceImageController::class, 'destroy'])->name('service.images.destroy');
Route::get('/Reviews',[CommentController::class,'Reviews'])->name('components.provider.Reviews');
Route::delete('/provider/comments/{id}', [CommentController::class, 'destroy'])->name('provider.comments.destroy');
Route::get('/profile', [ProfileController::class, 'show'])->name('components.provider.Profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('editProfile');
Route::post('/profile/update-image', [ProfileController::class, 'updateProfileImage'])->name('updateProfileImage');
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
Route::get('/details/{providerId}',[ClientController::class,'details'])->name('components.client.provider-details');
Route::post('/comment',[CommentController::class,'store'])->name('comment.store');
Route::get('/categories',[ClientController::class,'categories'])->name('components.client.categories');
Route::get('/creatEvent/{category_id}',[ClientController::class,'createvent'])->name('components.client.eventdetails');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservation/{reservationId}/providers',[ClientController::class,'showProviders'])->name('components.client.serviceProviderSelect');
Route::post('/reservation/{reservationId}/assign-provider', [ReservationController::class, 'assignProvider'])->name('client.assignProvider');
Route::get('/reservation/{reservationId}/invitations',[ClientController::class,'invitation'])->name('components.client.invitation');
Route::get('/payement/{reservationId}',[ClientController::class,'payement'])->name('components.client.payement');
Route::get('/history/{id}',[ClientController::class,'History'])->name('components.client.EventHistory');
Route::post('/reservation/{reservationId}/send-invitations', [ReservationController::class, 'sendInvitations'])->name('client.sendInvitations');
Route::post('/pay', [PaymentController::class, 'makePayment'])->name('stripe.payment');



});





