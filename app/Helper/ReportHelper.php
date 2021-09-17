<?php

namespace App\Helper;
use GuzzleHelper;
use Config;
use App\Models\Campaign\TrackCampaign;
use Log;
use DB;
use Helper;
use Auth;
use App\Models\Report\RawConversionData;
use App\Models\Report\RawDailyConversionData;
use App\Models\Report\CalculatedConversionData;
use App\Models\Report\CalculatedDailyConversionData;
use App\Models\Report\AppCurrentData;


class ReportHelper{


public static function fetchDailyConversionData($campaigns,$pdate=false){
    
    //  TO FETCH DAILY CURRENT REPORT  
    $camp_str="";
    $date=date("Y-m-d");
    if($pdate){
       $date=$pdate; 
    }
    $campaign_ids=[];
    $campaign_goals=[];
    foreach($campaigns as $campaign){
            $id=$campaign->track_id;
            $campaign_ids[$id]=$campaign->id;
            $campaign_goals[$id]=$campaign->default_goal_name;
            $camp_str.=("camp_ids[]=".$id."&");            
    }

    echo $endpoint='/v2/reports/subid?'.$camp_str.'start='.$date.'&end='.$date.'&group[]=campaign_id&group[]=campaign_name&group[]=goal_name&kpi[]=grossRevenue&kpi[]=grossConversions&kpi[]=clicks&kpi[]=cr';
    try{
        $guzzle=new GuzzleHelper(); 
        $response = $guzzle->init_get($endpoint);
        $response=json_decode($response,true);
        dump($response);
        if(isset($response['records']) && is_array($response['records']) && count($response['records'])){
            foreach($response['records'] as $record){
                $id=$record["campaign_id"];
                $campaign_goal=isset($campaign_goals[$id])?$campaign_goals[$record["campaign_id"]]:false;    
                if($campaign_goal && $record['goal_name']!=$campaign_goal){
                    continue;
                }
                
                $check=[];
                $check["track_campaign_id"]=$campaign_ids[$id];
                $check["data_date"]=$check["conversion_date"]=$date;
                
                $update_data=[];
                $update_data["clicks"]=$record["clicks"];
                $update_data["conversions"]=$record["grossConversions"];
                $update_data["revenue"]=$record["grossRevenue"];
                $update_data["cr"]=isset($record["cr"])?$record["cr"]:0;
                

                // SETTING DEFAULT VALUES
                $update_data["impressions"]=0;
                $update_data["ctr"]=0;
                $update_data["payout"]=0;
                
                RawDailyConversionData::updateOrCreate($check,$update_data);
            }            
        }
    }catch(Exception $e){
        report($e);

    }
    return;
              
}

public static function generateDailyConversionData($campaigns,$pdate=false){

}

public static function fetchRawConversionData($campaigns,$pdate=false){
    
    // TO FETCH YESTERDAY APP WISE REPORT  
    $camp_str="";
    $date=date("Y-m-d",strtotime("-1 day"));
    if($pdate){
       $date=$pdate; 
    }
    $app_current_data=AppCurrentData::where('id','>',0)->get()->pluck("id","app_bundle_id")->toArray();
    

    $campaign_ids=[];
    $campaign_goals=[];
    foreach($campaigns as $campaign){
            $id=$campaign->track_id;
            $campaign_ids[$id]=$campaign->id;
            $campaign_goals[$id]=$campaign->default_goal_name;
            $camp_str.=("camp_ids[]=".$id."&");            
    }
    echo $endpoint='/v2/reports/subid?'.$camp_str.'start='.$date.'&end='.$date.'&group[]=campaign_id&group[]=campaign_name&group[]=app_name&group[]=goal_name&kpi[]=grossRevenue&kpi[]=grossConversions&kpi[]=clicks&kpi[]=cr';    
    try{
        $guzzle=new GuzzleHelper(); 
        $response = $guzzle->init_get($endpoint);
        $response=json_decode($response,true);
        
        if(isset($response['records']) && is_array($response['records']) && count($response['records'])){
            $grouped_data=[];
            foreach($response['records'] as $record){
                $id=$record["campaign_id"];
                $campaign_goal=isset($campaign_goals[$id])?$campaign_goals[$record["campaign_id"]]:false;    
                if(strlen($campaign_goal)>0 && $record['goal_name']!=$campaign_goal){
                    continue;
                }
                if( $record['clicks']==0){
                    continue;
                }
           
                $app_id=$app_name=isset($app_current_data[$record["app_name"]])?$app_current_data[$record["app_name"]]:false;
                
                if($app_id>0){
                    

                    if(isset($grouped_data[$campaign_ids[$id]][$app_id])){
                        
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["clicks"]+=$record["clicks"];
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["conversions"]+=$record["grossConversions"];
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["revenue"]+=$record["grossRevenue"];

                        $net_clicks=$grouped_data[$campaign_ids[$id]][$app_id]["update"]["clicks"];
                        $net_conversions=$grouped_data[$campaign_ids[$id]][$app_id]["update"]["conversions"];
                        
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["cr"]=($net_clicks>0?floatval(($net_conversions/$net_clicks)*100):0);
                    }else{
                        $grouped_data[$campaign_ids[$id]][$app_id]["check"]=[];
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]=[];

                        $grouped_data[$campaign_ids[$id]][$app_id]["check"]["track_campaign_id"]=$campaign_ids[$id];
                        $grouped_data[$campaign_ids[$id]][$app_id]["check"]["conversion_date"]=$date;
                        $grouped_data[$campaign_ids[$id]][$app_id]["check"]["data_date"]=$date;
                        $grouped_data[$campaign_ids[$id]][$app_id]["check"]["app_current_data_id"]=$app_id;

                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["clicks"]=$record["clicks"];
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["conversions"]=$record["grossConversions"];
                        $net_clicks=$grouped_data[$campaign_ids[$id]][$app_id]["update"]["clicks"];
                        $net_conversions=$grouped_data[$campaign_ids[$id]][$app_id]["update"]["conversions"];
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["cr"]=($net_clicks>0?floatval(($net_conversions/$net_clicks)*100):0);
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["revenue"]=$record["grossRevenue"];

                        // SETTING DEFAULT VALUES
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["impressions"]=0;
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["ctr"]=0;
                        $grouped_data[$campaign_ids[$id]][$app_id]["update"]["payout"]=0;
                        
                    }
                    
                }


            }     
            dump($grouped_data);
            if(count($grouped_data)){
               foreach ($grouped_data as $cid => $app_collection) {
                    foreach ($app_collection as $app_item) {
                        RawConversionData::updateOrCreate($app_item["check"],$app_item["update"]);      
                    }
                   
               }
            }       
        }
    }catch(Exception $e){
        report($e);
        dump($e);
    }


    return;
              
}

public static function generateConversionData($campaigns,$pdate=false){
    
    $conversion_date=date('Y-m-d',strtotime("-1 Days"));
    if($pdate){
       $conversion_date=$pdate; 
    }
    
    $app_current_data=AppCurrentData::all();

    foreach ($campaigns as $campaign) {
        // CHECK EXISTING GENERATED DATA
        $existing_data_ids=CalculatedConversionData::where('track_campaign_id',$campaign->id)->where('conversion_date',$conversion_date)->pluck('raw_conversion_data_id')->toArray();

        $pending_raw_data=RawConversionData::where('track_campaign_id',$campaign->id)->where('conversion_date',$conversion_date)->whereNotIn("id",$existing_data_ids)->get();
        
        if(count($pending_raw_data)>0){
            foreach($pending_raw_data as $pending_raw_row){
                    
                try{
                    $app_data=$app_current_data->where('id',$pending_raw_row->app_current_data_id)->first();
                    $percentage=rand(70,110);
                    $clicks=$pending_raw_row->clicks;
                    $click_percentage=rand(-5,5);
                    $clicks=$clicks+intval(($clicks*$click_percentage)/100);
                    $conversions=$pending_raw_row->conversions;
                    if($conversions>0){
                        $conversion_percentage=rand(-5,5);
                        $conversions=$conversions+intval(($conversions*$conversion_percentage)/100);
                        $cr=round(floatval(($conversions/$clicks)*100),2); 
                        $ecpi=floatval($campaign->campaign_bid*($percentage/100));
                        $cost=floatval($conversions*$ecpi);
                        $cpm_bid=$app_data->cpm;
                        $impressions=($cost*1000)/$cpm_bid;
                        $ctr=floatval($clicks/$impressions);
                        
                    }else{
                        
                        $cr=0; 
                        $ecpi=0;
                        $cost=0;
                        $cpm_bid=$app_data->cpm;
                        $impressions=0;
                        $ctr=0;
                        
                    }
                    

                    $calculated= CalculatedConversionData::create([
                        "raw_conversion_data_id"=>$pending_raw_row->id,
                        "track_campaign_id"=>$campaign->id,
                        "campaign_bid"=>$campaign->campaign_bid,
                        "data_date"=>$conversion_date,
                        "app_current_data_id"=>$pending_raw_row->app_current_data_id,
                        "conversion_date"=>$conversion_date,
                        "clicks"=>$clicks,
                        "conversions"=>$conversions,
                        "impressions"=>$impressions,
                        "cr"=>$cr,
                        "ctr"=>$ctr,
                        "cost"=>$cost,
                        "ecpi"=>$ecpi                    
                    ]);
                    dump($calculated->id);
                }catch(Exception $e){dump($e);}
            }
        }


    }
    
}


/* FUNCTION TO SET DEAFULT APP MAPPING */
public static function appMapper($app_name){
    return "fb.video.downloader";
}



}