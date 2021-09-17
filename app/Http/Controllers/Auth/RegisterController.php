<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;
use AdvertiserHelper;
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
       //echo '<pre>';print_r($data); die;
        return Validator::make($data, [
            'company' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',

            'password_confirmation'  =>      'required|same:password',
        ]);
    }


    public function showRegistrationForm()
    {
       
        return view('auth.register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
        
    //     Session::put('advertiser', $data);
    //     // return User::create([
    //     //     'name' => $data['name'],
    //     //     'email' => $data['email'],
    //     //     'password' => Hash::make($data['password']),
    //     // ]);
    // }


    public function register(Request $request)
    {

        $this->validator($request->all())->validate();
         if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
          $this->response['errors']=['email'=>"Invalid Email id!"];
            return response()->json($this->response,422);
        }
       
         print_r($request->all()); die;
       
         try{
           $response =  AdvertiserHelper::pushNewAdvertiser($advertiser);  /* Send data to advertiser helper for create sign-up  */ 
           if(isset($response) && $response['status'] == 0){
            
            $this->response['message']= $response['data'];
            return $this->response;
           }else{
           
            $this->response['success']=1;
           } 
         }catch(Exception $e){
            report($e);
            
         } 
         
         /* Send mail to advertiser and admin for create sign-up  */
         $admin_emails=Config::get('custom_setting.ADMIN_EMAILS');
        if(!empty($user->trackier_id)){
           $mail=Mail::to($user->email);
           if(isset($admin_emails) && is_array($admin_emails) && count($admin_emails)){
            $mail->bcc($admin_emails);
           }
           $mail->send(new ApprovedWelcomeMail($user));
           $this->response['message']="Your account created successfully. You will be redirected to login page soon.";
        }else{
           $mail=Mail::to($user->email);
           if(isset($admin_emails) && is_array($admin_emails) && count($admin_emails)){
                $mail->bcc($admin_emails);
           }
           $mail->send(new PendingWelcomeMail($user));
            
           try{
             Mail::to($admin_emails)->send(new AdvertiserActivity(4,['advertiser'=>$user]));

           }catch(\Exception $e){
            report($e);
           } 
           
           $this->response['message']="Your account created successfully. You will be notfied via email once your account is activated.";
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



}
