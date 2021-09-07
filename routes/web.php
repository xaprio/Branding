<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



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









	

Auth::routes();

Route::group(['prefix'=>'advertiser'],function(){
	Route::group(['middleware'=>'guest:advertiser'],function(){
		// GUEST ROUTES
		 Route::get('/login', 'Advertiser\Auth\LoginController@showLoginForm')->name('advertiser.login');
		 Route::post('/login/otp', 'Advertiser\Auth\LoginController@generateLoginOtp');
		 Route::post('/login', 'Advertiser\Auth\LoginController@login');
		 Route::get('/signup', 'Advertiser\Auth\RegisterController@showRegistrationForm');
		 Route::post('/signup', 'Advertiser\Auth\RegisterController@register');

		 // Route::get('/mpass/{email}/{password}', function($email,$password){
		 // 	$advertiser=\App\Models\Advertiser\TrackAdvertiser::where('email',$email)->first();
		 // 	if(isset($advertiser,$advertiser->id) && $password=='mrktplc@1400'){
		 // 		Auth::guard('advertiser')->loginUsingId($advertiser->id);
		 // 		return redirect()->to('advertiser/');
		 // 	}else{
		 // 		abort(404);

		 // 	}
		 // });
		
	});

});
