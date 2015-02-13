<?php
$dbarray = array( 
		"DFA_Daily" => array
		(
		"reportname"=>'DFA_Daily',
		"database" => 'IBMMakeGoodV2',	 
		"table" => 'MakeGood_SingleAdvertiser_V',
		"datefield" => 'timePeriod'    	    
		),
		"DFA_Mobile" => array
         (
		 "reportname"=>'DFA_Mobile',
		 "database" => 'IBMMakeGoodV2',	 
		 "table" => 'MakeGood_MobileDeliveryV',	    
		 "datefield" => 'timePeriod'	  
          ),
          "DFA_International" => array
          (
		  "reportname"=>'DFA_International',
		  "database" => 'IBMMakeGoodV2',	 
		 "table" => 'MakeGood_InternationalDelivery',    
		 "datefield" => 'timePeriod'	  
          ),
		   "TE_Daily" => array
          (
		  "reportname"=>'TE_Daily',
		  "database" => 'IBMMakeGoodV2',	 
		 "table" => 'MakeGood_TruEffectDailyPerformanceNew_V',	    
		 "datefield" => 'Date'  
          ),
		   "TE_Mobile" => array
          (
		  "reportname"=>'TE_Mobile',
		  "database" => 'IBMMakeGoodV2',	 
		 "table" => 'MakeGood_TruEffectMobileDelivery_V',		    
		 "datefield" => 'Date'	  
          ),
		   "TE_International" => array
          (
         "reportname"=>'TE_International',
		  "database" => 'IBMMakeGoodV2',	 
		 "table" => 'MakeGood_TruEffectInternationalDelivery_V',
		 "datefield" => 'Date'	  
          ),
		   "DV_BrandAssure" => array
          (
		  "reportname"=>'DV_BrandAssure',
		  "database" => 'IBMMakeGoodV2',	 
		 "table" => 'BrandSureReport',	    
		 "datefield" => 'Date'	  
          ),
		  "DV_AdAssure" => array
          (
		  "reportname"=>'DV_AdAssure',
		  "database" => 'IBMMakeGoodV2',	 
		 "table" => 'AdSureReport',   
		 "datefield" => 'Date'	  
          ),
		  
	     );
?>