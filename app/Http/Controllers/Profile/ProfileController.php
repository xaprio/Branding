<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\Advertiser\AdvertiserHelper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Helper;
use URL;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile.profile');
    }


     protected function validator(array $data)
    {
        return Validator::make($data, [
            'oldPassword' => 'required|string|min:9|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'password' => 'required|string|min:9|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirmPassword'  =>      'required|same:password',
        ]);
    }



    public function changePassword()
    {
        return view('profile.change-password');
    }

    public function changePasswordUpdate(Request $request){
        $this->validator($request->all())->validate();
         
         try{
           $response =  AdvertiserHelper::changePasswordAdvertiser($request->all());  /* Send data to advertiser helper for changed password  */ 
           //echo " response in controller <pre>"; print_r($response); die;
           if(isset($response) && $response->success == 1){
           return redirect('/changePassword')->with('message', 'Your password has been updated successful');
           }else if(isset($response) && $response->success == 0){
           return redirect('/changePassword')->with('failure', 'false another email');
            
           }else{
            return redirect('/changePassword')->with('failure', 'Something went wrong');
           } 
         }catch(Exception $e){
            report($e);
            
         } 
         
        return response()->json($this->response);
    }
}
