<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Advertiser\AdvertiserController;
use App\Http\Controllers\Campaign\CampaignController;
use App\Http\Controllers\Offer\OfferController;

use App\Http\Controllers\Advertiser\Auth\LoginController;
use App\Http\Controllers\Advertiser\Auth\RegisterController;





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
    return view('auth.login');
});

//Auth::routes();



Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/change-password', [ProfileController::class, 'changePassword']);

// Advertiser module
Route::get('/advertiser', [AdvertiserController::class, 'index']);
Route::get('/add-advertiser', [AdvertiserController::class, 'show']);
Route::get('/edit-advertiser', [AdvertiserController::class, 'edit']);

// Campaign module
Route::get('/campaign', [CampaignController::class, 'index']);
Route::get('/add-campaign', [CampaignController::class, 'show']);
Route::get('/edit-campaign', [CampaignController::class, 'edit']);

// Offer module
Route::get('/offer', [OfferController::class, 'index']);
Route::get('/add-offer', [OfferController::class, 'show']);
Route::get('/edit-offer', [OfferController::class, 'edit']);


// Route::group(['prefix'=>'advertiser'],function(){
// 	  // echo "heree"; die;
	//Route::group(['middleware'=>'guest:advertiser'],function(){
		// GUEST ROUTES
		 Route::get('/login', [LoginController::class, 'showLoginForm'])->name('advertiser.login');
		 //Route::post('/login/otp', [LoginController::class, 'generateLoginOtp']);
		 Route::post('/login', [LoginController::class, 'login']);
		 Route::get('/signup', [RegisterController::class, 'showRegistrationForm']);
		 Route::post('/signup', [RegisterController::class, 'register']);
		 Route::get('/otp', [RegisterController::class, 'otpVerify']);
		 Route::post('/otp', [RegisterController::class, 'generateLoginOtp']);
		 Route::get('/forgot', [LoginController::class, 'forgotPassword']);
		 Route::post('/forgot', [LoginController::class, 'forgotSendPassword']);
		 Route::get('/forgototp', [LoginController::class, 'forgotPasswordOtp']);
		 Route::post('/forgototp', [LoginController::class, 'forgotPasswordOtpMatch']);
   
        Route::group(['middleware'=>'AdvertiserAuth'],function(){
   	    Route::get('/dashboard', [DashboardController::class, 'index']);
   	    Route::get('/changePassword', [ProfileController::class, 'changePassword']);
   	    Route::post('/changePassword', [ProfileController::class, 'changePasswordUpdate']);
	    });
        Route::get('/logout', [LoginController::class, 'logout']);
		
	// });

