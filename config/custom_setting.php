<?php

return [
	    'PER_PAGE_LIMIT'=>50,
	    'ADMIN_EMAILS'=>['imran.a@xaprio.com','saurabh@xaprio.com'],  //'saurabh@xaprio.com'
	    'ADVERTISER_PREFIX'=>'AL-',     // need to be discussed
	    'GTM_ID'=>'UA-151593873-2',
	    'INVOICE_ADDRESS'=>[
	    						'company'=>'AppLabs Media',
	    						'address1'=>'111 North Bridge Road',
	    						'city'=>'08-18',
	    						'state'=>'Peninsula Plaza',
	    						'pincode'=>'179098',
	    						'country'=>'Singapore',

	    				   ],			
		'ERROR_EXCEPTION_EMAIL' => ['saurabh@xaprio.com','rohit@xaprio.com'],

        //START CAMPAIGN SET DEFAULT VALUE
         'TRACKING_MACRO_MAPPING'=>[
	    	'{clickid}'=>['replace'=>'{clickid}','info'=>'Click ID for conversion tracking'],
	    	'{gaid}'=>['replace'=>'{gaid}','info'=>'Google Advertising ID for Android'],
             '{idfa}'=>['replace'=>'{idfa}','info'=>'IDFA for IOS']
	    ],
	    'DEF_CAMP_BUDGET'=>20,    // set default budget ammount
	    'MIN_CAMP_BID'=>0.10,    // set minimum bid
		'REVENUE_PERCENTAGE'=>50,  // set revenue percentage
		'PAYOUT_PERCENTAGE'=>100,  // set payout percentage
		'TRACKIER_API_KEY'=>'5e61db00bb06ea4695e54e52fdb5e61db00bb121',  // trackier x-api-key
	    'BRANDING_BASE_URL'=>'http://3.109.69.208:4000/api/v1',                 // trackier base url
	    'TRACKIER_ADVERTISER_STATUS'=>2,    // status 1 = active, or status 2 = pending
	    'TRACKIER_CAMPAIGN_STATUS'=>'paused',    // status 1 = active, or status 2 = paused
	    'TRACKIER_CAMPAIGN_STATUS_NUMERIC'=>2, //status 1 = active, or status 2 = paused.set as a numeric value for status
	    'TRACKIER_ADVERTISER_CONV_TRACKING'=>'postback',
	    'TRACKIER_ADVERTISER_CURRENCY'=>'USD',
	    'TRACKIER_ADVERTISER_VISIBILITY'=>'private',
	    'TRACKIER_ADVERTISER_METHOD'=>'default',
	    'TRACKIER_ADVERTISER_OBJECTIVE'=>'cpa',
	    'TRACKIER_PRIMARY_TRACKING_DOMAIN'=>'t.clickscot.com',
	    'TRACKIER_ADVERTISER_REDIRECT_TYPE'=>'302',
	    'TRACKIER_ADVERTISER_DEFAULT_GOAL_NAME'=>'DSP_PAID',
	    'TRACKIER_ADVERTISER_ATTRIBUTION_WINDOW'=>'168',
	    'TRACKIER_TARGETING_DEVICE'=>'mobile',
	    //END CAMPAIGN SET DEFAULT VALUE  attributionWindow

        //START CAMPAIGN CAPS SET DEFAULT VALUE
	    'CAMPAIGN_CAPS_TYPE'=>'conversion',
	    'CAMPAIGN_CAPS_VISIBILITY'=>'private',
	    'CAMPAIGN_PUBLISHER_CAPS_TYPE'=>'group',
        //END CAMPAIGN CAPS SET DEFAULT VALUE
        
        //START CAMPAIGN MMP SET EXAMPLE LINKS
        'SHOW_EXAMPLE_LINK_BRANCH'=>'BRANCH',
        'SHOW_EXAMPLE_LINK_APPSFLYER'=>'APPSFLYER',
        'SHOW_EXAMPLE_LINK_SINGULAR'=>'SINGULAR',

        //END CAMPAIGN MMP SET EXAMPLE LINKS

       
]; 