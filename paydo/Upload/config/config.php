<?php

define('DB_SERVER', 'localhost'); // your server
define('DB_USERNAME', 'gffyj_test');  // your database username
define('DB_PASSWORD', '7501507003'); // your database password
define('DB_NAME', 'gffyj_test'); // ypur database name
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
  $query=mysqli_query($link,"select * from admin_setting");
  if($result=mysqli_fetch_array($query))
  {
    $a=$result["username"];
    $b=$result["password"];
    $website=$result["website"];
    $api_key=$result["api_key"];
    $authkey=$result['sms_key'];
    $domain=$result["domain_name"];
    $email=$result["email_id"];
    $mobile=$result["mobile_number"];
    $comany=$result["company_name"];
    $address=$result["company_add"];
    $pay_key=$result["payment_auth_key"];
    $serial=$result["payment_secret_key"];
    $about=$result["about_us"];
    $contact=$result["contact_us"];
    $purchase_key=$result["purchase_key"];
    $banner1=$result["banner1_text"];
    $url=$result["banner1_image"];
    $banner2=$result["banner2_text"];
    $url2=$result["banner2_image"];
    $banner3=$result["banner3_text"];
    $url3=$result["banner3_image"];    
  }
   $api="username=$a&password=$b";
  
}

$trialtoken = "qwKSFX2jFHyvk2rCpunJ3VLBFljtH1";
$token = "qwKSFX2jFHyvk2rCpunJ3VLBFljtH1";
$sender="paydo";
?>