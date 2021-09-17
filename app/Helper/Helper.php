<?php

namespace App\Helper;
use App\Models\Targeting\TrackTargetingCountry;
use App\Models\Targeting\TargetingBrowser;
use App\Models\Targeting\TargetingDevice;
use App\Models\Targeting\TargetingOs;
use App\Models\Targeting\TargetingOsVersion;
use App\Models\PanelSetting;
use Cache;
use App\Models\Campaign\CampaignMmp;
use App\Models\Campaign\CampaignCategory;

class Helper{


	
public static function getOS() { 
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$os_platform  = "Unknown OS Platform";
	$os_array = array(
						'/windows nt 10/i'     =>  'Windows 10',
						'/windows nt 6.3/i'     =>  'Windows 8.1',
						'/windows nt 6.2/i'     =>  'Windows 8',
						'/windows nt 6.1/i'     =>  'Windows 7',
						'/windows nt 6.0/i'     =>  'Windows Vista',
						'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
						'/windows nt 5.1/i'     =>  'Windows XP',
						'/windows xp/i'         =>  'Windows XP',
						'/windows nt 5.0/i'     =>  'Windows 2000',
						'/windows me/i'         =>  'Windows ME',
						'/win98/i'              =>  'Windows 98',
						'/win95/i'              =>  'Windows 95',
						'/win16/i'              =>  'Windows 3.11',
						'/macintosh|mac os x/i' =>  'Mac OS X',
						'/mac_powerpc/i'        =>  'Mac OS 9',
						'/linux/i'              =>  'Linux',
						'/ubuntu/i'             =>  'Ubuntu',
						'/iphone/i'             =>  'iPhone',
						'/ipod/i'               =>  'iPod',
						'/ipad/i'               =>  'iPad',
						'/android/i'            =>  'Android',
						'/blackberry/i'         =>  'BlackBerry',
						'/webos/i'              =>  'Mobile'
					);
	foreach ($os_array as $regex => $value) { 
		if (preg_match($regex, $user_agent)) {
			$os_platform    =   $value;
		}
	}   
	return $os_platform;
}

public static function getBrowser() {
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$browser = "Unknown Browser";
	$browser_array = array(
							'/msie/i'       =>  'Internet Explorer',
							'/trident/i'    =>  'Internet Explorer',
							'/firefox/i'    =>  'Firefox',
							'/safari/i'     =>  'Safari',
							'/chrome/i'     =>  'Chrome',
							'/edge/i'       =>  'Edge',
							'/opera/i'      =>  'Opera',
							'/opr/i'        =>  'Opera',
							'/netscape/i'   =>  'Netscape',
							'/maxthon/i'    =>  'Maxthon',
							'/konqueror/i'  =>  'Konqueror',
							'/mobile/i'     =>  'Handheld Browser'
						);
	foreach ($browser_array as $regex => $value) { 
		if (preg_match($regex, $user_agent)) {
			$browser    =   $value;
		}
	}
	return $browser;
}

public static function loadPanelSettings($name){
    $settings=[];
    if(Cache::has('panel-setting')){
        $settings= Cache::get('panel-setting');
    }else{
        $settings=PanelSetting::all();
        if(count($settings)){
            $settings=$settings->pluck('value','name')->toArray();
            Cache::forever('panel-setting',$settings);
        }else{
            $settings=[];
        }       
    }
    if(isset($settings[$name])){
        return $settings[$name];
    }else{
        return false;
    }
}

 public static function convertSearchDataDecode($sr_dt = "")
    {
        if (strlen($sr_dt) > 0) {
            $decoded_string = base64_decode($sr_dt);

            parse_str($decoded_string, $result);

            return $result;
        } else {
            return [];
        }
    }

    public static function convertSearchDataEncode($sr_dt = [])
    {
        if (count($sr_dt) > 0 && is_array($sr_dt)) {

            $string = "";
            foreach ($sr_dt as $k => $v) {
                if (is_string($k) && (is_string($v) || $v == "")) {

                    $string .= $k . '=' . ($v) . '&';
                } else if(is_array($v)){
                    foreach ($v as $key => $value) {
                        $string .= $k . '[]=' . ($value) . '&';
                    }
                }
            }
            return base64_encode(rtrim($string, '&'));
        } else {
            return "";
        }
    }


    public static function listCountry(){
    	return TrackTargetingCountry::all()->sortBy('country_name');
    }
    public static function listRegion($country_ids=[]){
    	return TargetingRegion::whereIn('targeting_country_id')->get();
    }
    public static function listCity($country_ids=[]){
    	return TargetingCity::whereIn('targeting_country_id')->get();
    }
    public static function listOs(){
    	return TargetingOs::all();
    }

    public static function campaignMmp(){
        return CampaignMmp::all();
    }

    public static function listCampaignCategory(){
        return CampaignCategory::all();
    }
   
    public static function listDevice(){
    	return TargetingDevice::all();
    }

    public static function listCategory(){
        return CampaignCategory::all();
    }


    public static function listOsVersion($os_ids=[]){

        return TargetingOsVersion::all();
    }
    
   
    public static function listBrowser(){
    	return TargetingBrowser::all();
    }

	public static function xap_crypt($string, $action = 'e')
    {
        // you may change these values to your own
        $secret_key = 'applabsmarketplace';
        $secret_iv  = 'self-serve-platform';

        $output         = false;
        $encrypt_method = "AES-256-CBC";
        $key            = hash('sha256', $secret_key);
        $iv             = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'e') {
            $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
        } else if ($action == 'd') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }

    public static function getApporvedPlusDeclinedCampaigns(){
        $ids=[];
        $setting=PanelSetting::where('name','ApporvedPlusDeclinedCampaigns')->first();
        if(isset($setting,$setting->value) && strlen($setting->value)){
            $ids=explode(',', $setting->value);
        } 
        return $ids;      
    }






}