<?php

namespace App\Http\Controllers\Advertiser\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Session;
use Helper;
use URL;
use Auth;
use Config;
use Cache;
use GuzzleHelper;
use Redirect;
use App\Helper\Advertiser\AdvertiserHelper;
class LoginController extends Controller
{

    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating advertisers for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $resposne;

    public function __construct()
    {
        //$this->middleware('guest:advertiser')->except('logout');
        $this->response=[];
        $this->response['response']=1;
        $this->response['success']=0;
        
    }

    public function showLoginForm()
    {
     return view('auth.login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    
    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:9|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
           
        ]);
        
    }

    /**
     * Validate the user OTP request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateOtpRequest(Request $request)
    {
       return Validator::make($request->only(['email']), [
            'email' => ['required',
                        Rule::exists('track_advertisers')->where(function ($query)use($request) {
                            $query->where('email', $request->email)->where('status',1);
                        })
                        ]
        ])->validate();
        
    }

    /**
     * Handle login OTP for advertiser login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return json
     *
     * 
     */    
    public function generateLoginOtp(Request $request){
        

        //BOC :: SJ030220211042 CODE FOR LOGIN OLD V1 ADVERTISER  
        $oldAdvertiser=OldAdvertiser::where('email',$request->email)->first();
        if(isset($oldAdvertiser->id)){
            $guzzle=new GuzzleHelper();
            try{
                $loginResponse = $guzzle->basic_get('https://dsp.applabs.ai/advertiser/migrated/sendLoginOTP?email='.$request->email.'&session_id='.Session::getId());
                return response()->json(json_decode($loginResponse,true));
            }catch(\Exception $e){
                report($e);
            }
        }
        //EOC :: SJ030220211042 CODE FOR LOGIN OLD V1 ADVERTISER  

        if($this->validateOtpRequest($request)){
            $otp=$this->getLoginOtp($request);

            $this->response['success']=1;
        }

        return response()->json($this->response);
    }

    /**
     * Generate a random login OTP for advertiser login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return String
     *
     * 
     */    
    
    
     /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        //$this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
       
        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);
        $this->validator($request->all())->validate();
         if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
          $this->response['errors']=['email'=>"Invalid Email id!"];
            return response()->json($this->response,422);
        }
        
         try{
            //echo "hererer login"; die;
           $response =  AdvertiserHelper::loginAdvertiser($request->all());  /* Send data to advertiser helper for create sign-up  */ 
           //echo "<pre>"; print_r($response); die;
           if(isset($response) && $response->success == 1){
             \Session::put('advertiser', $response->data);
            
            return redirect('/dashboard')->with('message', 'Login successfully');

           }else if(isset($response) && $response->success == 0){
            
          return redirect('/login')->with('failure', 'Authentication failed due to incorrect login credentials');
            
           }else{
            return redirect('/login')->with('failure', 'Something went wrong');
           } 
         }catch(Exception $e){
            report($e);
            
         } 
       
        return response()->json($this->response);
    }

    public function forgotPassword()
    {
        return view('auth.email');
    }


    protected function validateLogin(Request $request)
    {
        return Validator::make($request->only(['email']), [
            'email'=>'required', 
        ])->validate();
        
    }

    public function forgotSendPassword(Request $request){
        $this->validateLogin($request);
        // echo "hereee"; die;
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
          
            return redirect('/forgot')->with('failure', 'Invailid email Id');
        }
         try{
           $response =  AdvertiserHelper::forgotPasswordAdvertiser($request->all());  /* Send data to advertiser helper for changed password  */ 
           
           if(isset($response) && $response->success == 1){
            \Session::put('email', $response->data[0]->email);
           return redirect('/forgototp')->with('message', 'Record has been inserted successfully.' .$response->data[0]->otp);
           }else if(isset($response) && $response->success == 0){
           return redirect('/forgot')->with('failure', 'An account with that email is not exists');
            
           }else{
            return redirect('/forgot')->with('failure', 'Something went wrong');
           } 
         }catch(Exception $e){
            report($e);
            
         } 
         
        return response()->json($this->response);
    }

    protected function validateforgot(Request $request)
    {
        return Validator::make($request->only(['newPassword','confirmPassword','otp']), [
            'otp'=>'required|numeric|digits:6|regex:/^(?=.*?[0-9]).{6,}$/', 
            'newPassword' => 'required|string|min:9|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirmPassword'  =>      'required|same:newPassword',
        ])->validate();
        
    }

    public function forgotPasswordOtp()
    {
        return view('auth.forgot-otp-verify');
    }


     public function forgotPasswordOtpMatch(Request $request){
     $this->validateforgot($request);
        try{
           $response =  AdvertiserHelper::forgotOtpverify($request->all());  /* Send data to advertiser helper for create sign-up  */ 
           //echo "<pre>"; print_r($response); die;
           if(isset($response) && $response->success == true){
            return redirect('/login')->with('message', 'Registered Succesfully');
           }else if(isset($response) && $response->success == false){
            
          return redirect('/forgototp')->with('failure', 'Otp is not valid/expired');
            
           }else{
            return redirect('/forgototp')->with('failure', 'Something went wrong');
           } 
         }catch(Exception $e){
            report($e);
            
         } 

        return response()->json($this->response);
     }




    public function logout(Request $request)
    {
       Session::flush();
        return  redirect('/login')->with('logout', 'Logout Succesfully');;
    }


     protected function guard()
    {
        return Auth::guard('advertiser');
    }

    
}
