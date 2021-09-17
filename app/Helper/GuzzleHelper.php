<?php

namespace App\Helper;

use Config;
use GuzzleHttp\Exception\GuzzleException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Log;
class GuzzleHelper{

	protected $apikey;
	protected $baseUrl;

	public function __construct(){
/* Get api-key from custome_setting.php */
		$this->apikey=Config::get('custom_setting.TRACKIER_API_KEY');  
/* Get base Url from custome_setting.php */
		$this->baseUrl=Config::get('custom_setting.BRANDING_BASE_URL'); 

	}
    
    /* Send data through guzzel library to post method */
	public function init_post($url,$data=[],$multipart=[]){
		
		$client = new \GuzzleHttp\Client();
        $client = new Client([
                'headers' => ['Content-Type' => 'application/json',
                'x-api-key'=>$this->apikey
             ]
        ]);
		$url=$this->baseUrl.$url;
		$response = $client->post($url,[
			'body'=>$data
		]);	
		$response=$response->getBody()->getContents();

		Log::info($url);
		Log::info($data);
		Log::info($response);
		return $response;
	}


	public function init_postChangePassword($url,$data=[],$multipart=[]){
		$getSession = Session::get('advertiser');
		$client = new \GuzzleHttp\Client();
		$headers = [
        'Authorization' => 'Bearer ' . $getSession->token,
        ];		
        $client = new Client([
                'headers' => ['Content-Type' => 'application/json',
                'x-api-key'=>$this->apikey,
                'Authorization' => 'Bearer ' . $getSession->token,           ]
        ]);
		$url=$this->baseUrl.$url;
		$response = $client->post($url,[
			'body'=>$data,
		]);	
        
		$response=$response->getBody()->getContents();
		Log::info($url);
		Log::info($data);
		Log::info($response);
		return $response;
	}

     /* Get data through guzzel library to get method */
	public function init_get($url){
		$client = new \GuzzleHttp\Client();
		$headers=['x-api-key'=>$this->apikey];
		$url=$this->baseUrl.$url;
		$response = $client->get($url,[
			'headers'=>$headers
		]);
         
		$response=$response->getBody()->getContents();
		Log::info($url);
		Log::info($response);
		return $response;
	}
    
    
    

}