<?php

namespace App\Http\Controllers\Advertiser\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Helper;
use URL;
use Auth;
use Illuminate\Auth\Events\Registered;
use DB;
use Config;
use App\Helper\Advertiser\AdvertiserHelper;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    protected $resposne;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/advertiser/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:advertiser');
        $this->response=[];
        $this->response['response']=1;
        $this->response['success']=0;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
           'company' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:9|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'password_confirmation'  =>      'required|same:password',
        ]);
    }

    

      /**
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
		
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
         if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
          $this->response['errors']=['email'=>"Invalid Email id!"];
            return response()->json($this->response,422);
        }
        
         try{
           $response =  AdvertiserHelper::createNewAdvertiser($request->all());  /* Send data to advertiser helper for create sign-up  */ 
           //echo "<pre>"; print_r($response); die;
           if(isset($response) && $response->success == 1){
             \Session::put('email', $response->data[0]->email);
            
            return redirect('/otp')->with('message', 'The otp is - '.$response->data[0]->otp);

           }else if(isset($response) && $response->success == 0){
            
          return redirect('/signup')->with('failure', 'Email is already exists. Please enter another email');
            
           }else{
            return redirect('/signup')->with('failure', 'Something went wrong');
           } 
         }catch(Exception $e){
            report($e);
            
         } 
         
         /* Send mail to advertiser and admin for create sign-up  */
        //  $admin_emails=Config::get('custom_setting.ADMIN_EMAILS');
        // if(!empty($user->trackier_id)){
        //    $mail=Mail::to($user->email);
        //    if(isset($admin_emails) && is_array($admin_emails) && count($admin_emails)){
        //     $mail->bcc($admin_emails);
        //    }
        //    $mail->send(new ApprovedWelcomeMail($user));
        //    $this->response['message']="Your account created successfully. You will be redirected to login page soon.";
        // }else{
        //    $mail=Mail::to($user->email);
        //    if(isset($admin_emails) && is_array($admin_emails) && count($admin_emails)){
        //         $mail->bcc($admin_emails);
        //    }
        //    $mail->send(new PendingWelcomeMail($user));
            
        //    try{
        //      Mail::to($admin_emails)->send(new AdvertiserActivity(4,['advertiser'=>$user]));

        //    }catch(\Exception $e){
        //     report($e);
        //    } 
           
        //    $this->response['message']="Your account created successfully. You will be notfied via email once your account is activated.";
        // }
        return response()->json($this->response);

    }

    public function otpVerify(Request $request){

       return view('auth.otp-register');
    }


    protected function validateLogin(Request $request)
    {
        return Validator::make($request->only(['otp']), [
            'otp'=>'required|numeric|digits:6|regex:/^(?=.*?[0-9]).{6,}$/', 
        ])->validate();
        
    }


     public function generateLoginOtp(Request $request){
        
          $this->validateLogin($request);

        try{
           $response =  AdvertiserHelper::createOtpverify($request->all());  /* Send data to advertiser helper for create sign-up  */ 
           
           if(isset($response) && $response->success == true){
            return redirect('/login')->with('message', 'Registered Succesfully');
           }else if(isset($response) && $response->success == false){
            
          return redirect('/otp')->with('failure', 'Otp is not valid/expired');
            
           }else{
            return redirect('/otp')->with('failure', 'Something went wrong');
           } 
         }catch(Exception $e){
            report($e);
            
         } 

        return response()->json($this->response);
    }




    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('advertiser');
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
