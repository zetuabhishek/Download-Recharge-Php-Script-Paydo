<?php
require_once '../config/config.php';

if(isset($_POST['flag'])){    
$mobile=$_POST['mobile'];$phone=substr($mobile,0,4);
 
$token="qwKSFX2jFHyvk2rCpunJ3VLBFljtH1";
$url="http://api.rechapi.com/mob_details.php?format=xml&token=$token&mobile=$phone";
   $request_timeout = 60; // 60 seconds timeout
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_TIMEOUT, $request_timeout);
   curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $request_timeout);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $output = curl_exec($ch);
   $curl_error = curl_errno($ch);
   $getserver= curl_getinfo($ch);
   curl_close($ch);
   if($getserver["http_code"]==200 || $curl_error=="28" )
   {
    
           $xml = simplexml_load_string($output);
           $operator=$xml->service;
           $location=$xml->location;
           $error_code=$xml->error_code;
           $resText=$xml->resText;
		   
   }
     //echo "OPERATOR NAME - $operator, Location - $location ,  ERROR- $error_code , Reason - $resText <hr />";
      
         //echo "<br>".$output;                      header("location:welcome.php");
  }                       
	  
?>