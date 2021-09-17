<?php

namespace App\Helper\Advertiser;
use GuzzleHelper;
use Config;
use Session;
use Guzzle\Http\Exception\ClientErrorResponseException;
class AdvertiserHelper{


	public static function getAdvertiserStatus($status=1){
		if($status==1){
			return 'active';  // ACTIVE ADVERTISER	
		}else{
			return  'pending';  // PENDING ADVERTISER
		}
    }




	public static function createNewAdvertiser($advertiser){
        // START CREATE NEW ADVERTISER SIGN-UP
        //echo "<pre>"; print_r($advertiser); die;
		$guzzle=new GuzzleHelper();
		$data=[];
		//$get_status =  AdvertiserHelper::getAdvertiserStatus($advertiser->status);  // GET STATUS AS A STRING THROUGH NUMERIC STATUS
        //$user['status'] = $get_status;
        $data['company']=$advertiser['company'];
		$data['name']=$advertiser['name'];	
		$data['email']=$advertiser['email'];		
		$data['password']=$advertiser['password'];	

		
		$responseStatus = [];
		$responseStatus['status'] = 1;
		$responseStatus['data'] = '';
		//  SEND DATA TO CREATE NEW ADVERTISER
		//print_r(json_encode($data)); die;
		try{
			$response = $guzzle->init_post('/users/registration',json_encode($data));
			$responseStatus['data'] = json_decode($response);
			
			}catch (\Exception $exception) {
				// echo "here"; die;
		if($exception->getCode() == 400) {
			 $responseData = $exception->getResponse();
			 $responseBody = $responseData->getBody()->getContents();
			 $data1 = json_decode($responseBody);
			 $responseStatus['status'] = 0;
			 $responseStatus['data'] =$data1->errors[0]->message;
		} else {
		     $response = $exception->getMessage();
		}
    }
		//  GET RESPONSED FROM TRACKIER API THROUGH GUZZEL HELPER

		if($responseStatus['status'] == 1 && isset($responseStatus['data']->success) == 1){
			$advertiser = $responseStatus['data'];
			
		}else if($responseStatus['status'] == 0){
			   $advertiser = $responseStatus;
		}
		return $advertiser;

		// END CREATE NEW ADVERTISER SIGN-UP
	}


	public static function createOtpverify($advertiser){
        // START CREATE NEW ADVERTISER SIGN-UP
		$guzzle=new GuzzleHelper();
		$data=[];
		$data['email']= Session::get('email');		
		$data['otp']=$advertiser['otp'];	

		
		$responseStatus = [];
		$responseStatus['status'] = 1;
		$responseStatus['data'] = '';
		//  SEND DATA TO CREATE NEW ADVERTISER
		//print_r(json_encode($data)); die;
		try{
			$response = $guzzle->init_post('/users/verifyOtp',json_encode($data));
			$responseStatus['data'] = json_decode($response);
			
			}catch (\Exception $exception) {
			
		if($exception->getCode() == 400) {
			 $responseData = $exception->getResponse();
			 $responseBody = $responseData->getBody()->getContents();
			 $data1 = json_decode($responseBody);
			 $responseStatus['status'] = 0;
			 $responseStatus['data'] =$data1->errors[0]->message;
		} else {
		     $response = $exception->getMessage();
		}
    }
		//  GET RESPONSED FROM TRACKIER API THROUGH GUZZEL HELPER

		if($responseStatus['status'] == true && isset($responseStatus['data']->success) == true){
			$advertiser = $responseStatus['data'];
			
		}else if($responseStatus['status'] == 0){
			   $advertiser = $responseStatus;
		}
		return $advertiser;

		// END CREATE NEW ADVERTISER SIGN-UP
	}


	public static function loginAdvertiser($advertiser){
        // START ADVERTISER SIGN-IN
		$guzzle=new GuzzleHelper();
		$data=[];
		$data['email']= $advertiser['email'];		
		$data['password']=$advertiser['password'];	
		$responseStatus = [];
		$responseStatus['status'] = 1;
		$responseStatus['data'] = '';
		//  SEND DATA TO CREATE NEW ADVERTISER
		try{
			$response = $guzzle->init_post('/users/login',json_encode($data));
			$responseStatus['data'] = json_decode($response);
			}catch (\Exception $exception) {
			
		if($exception->getCode() == 400) {
			 $responseData = $exception->getResponse();
			 $responseBody = $responseData->getBody()->getContents();
			 $data1 = json_decode($responseBody);
			 $responseStatus['status'] = 0;
			 $responseStatus['data'] =$data1->errors[0]->message;
		} else {
		     $response = $exception->getMessage();
		}
    }
		//  GET RESPONSED FROM TRACKIER API THROUGH GUZZEL HELPER
		if($responseStatus['status'] == 1 && isset($responseStatus['data']->success) == 1){
			$advertiser = $responseStatus['data'];
			
		}else if($responseStatus['status'] == 0){
			   $advertiser = $responseStatus;
		}
		return $advertiser;
		// END CREATE NEW ADVERTISER SIGN-UP
	}


    public static function changePasswordAdvertiser($advertiser){
        // START ADVERTISER CHANGE PASSWORD 
		$guzzle=new GuzzleHelper();
		$data=[];
		$data['oldPassword']= $advertiser['oldPassword'];		
		$data['newPassword']=$advertiser['password'];	
		$data['confirmPassword']=$advertiser['confirmPassword'];
		$responseStatus = [];
		$responseStatus['status'] = 1;
		$responseStatus['data'] = '';
		//  SEND DATA TO UPDATE PASSWORD
		//print_r(json_encode($data)); die;
		try{
			$response = $guzzle->init_postChangePassword('/users/changePassword',json_encode($data));
			$responseStatus['data'] = json_decode($response);
			}catch (\Exception $exception) {
		if($exception->getCode() == 400) {
			 $responseData = $exception->getResponse();
			 $responseBody = $responseData->getBody()->getContents();
			 $data1 = json_decode($responseBody);
			 $responseStatus['status'] = 0;
			 $responseStatus['data'] =$data1->errors[0]->message;
		} else {
		     $response = $exception->getMessage();
		}
    }
		//  GET RESPONSED FROM TRACKIER API THROUGH GUZZEL HELPER
		if($responseStatus['status'] == 1 && isset($responseStatus['data']->success) == 1){
			$advertiser = $responseStatus['data'];
			
		}else if($responseStatus['status'] == 0){
			   $advertiser = $responseStatus;
		}
		return $advertiser;

		// END CREATE NEW ADVERTISER SIGN-UP
	}

    public static function forgotPasswordAdvertiser($advertiser){
        // START ADVERTISER CHANGE PASSWORD 
		$guzzle=new GuzzleHelper();
		$data=[];
		$data['email']= $advertiser['email'];		
		$responseStatus = [];
		$responseStatus['status'] = 1;
		$responseStatus['data'] = '';
		//  SEND DATA TO UPDATE PASSWORD
		//print_r(json_encode($data)); die;
		try{
			$response = $guzzle->init_post('/users/forgotPassword',json_encode($data));
			$responseStatus['data'] = json_decode($response);
			}catch (\Exception $exception) {
		if($exception->getCode() == 400) {
			 $responseData = $exception->getResponse();
			 $responseBody = $responseData->getBody()->getContents();
			 $data1 = json_decode($responseBody);
			 $responseStatus['status'] = 0;
			 $responseStatus['data'] =$data1->errors[0]->message;
		} else {
		     $response = $exception->getMessage();
		}
    }
		//  GET RESPONSED FROM TRACKIER API THROUGH GUZZEL HELPER
		if($responseStatus['status'] == 1 && isset($responseStatus['data']->success) == 1){
			$advertiser = $responseStatus['data'];
		}else if($responseStatus['status'] == 0){
			   $advertiser = $responseStatus;
		}
		return $advertiser;
		// END CREATE NEW ADVERTISER SIGN-UP
	}


	public static function forgotOtpverify($advertiser){
        // START ADVERTISER CHANGE PASSWORD 
		$guzzle=new GuzzleHelper();
		$data=[];
		$data['email']= Session::get('email');
		$data['otp']= $advertiser['otp'];
		$data['newPassword']= $advertiser['newPassword'];
		$data['confirmPassword']= $advertiser['confirmPassword'];		
		$responseStatus = [];
		$responseStatus['status'] = 1;
		$responseStatus['data'] = '';
		//  SEND DATA TO UPDATE PASSWORD
		//print_r(json_encode($data)); die;
		try{
			$response = $guzzle->init_post('/users/resetPassword',json_encode($data));
			$responseStatus['data'] = json_decode($response);
			}catch (\Exception $exception) {
		if($exception->getCode() == 400) {
			 $responseData = $exception->getResponse();
			 $responseBody = $responseData->getBody()->getContents();
			 $data1 = json_decode($responseBody);
			 $responseStatus['status'] = 0;
			 $responseStatus['data'] =$data1->errors[0]->message;
		} else {
		     $response = $exception->getMessage();
		}
    }
		//  GET RESPONSED FROM TRACKIER API THROUGH GUZZEL HELPER
		if($responseStatus['status'] == 1 && isset($responseStatus['data']->success) == 1){
			$advertiser = $responseStatus['data'];
		}else if($responseStatus['status'] == 0){
			   $advertiser = $responseStatus;
		}
		return $advertiser;
		// END CREATE NEW ADVERTISER SIGN-UP
	}




	

}