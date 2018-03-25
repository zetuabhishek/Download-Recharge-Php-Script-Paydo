<?php
require_once '../config/config.php';

session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
//echo $_SESSION['username'];
$find = "select * from dis_users where dis_mobile = '".$_SESSION['username']."'";
$query=mysqli_query($link,$find);
$rows = mysqli_num_rows($query);
  if($rows > 0)
  {
     while($result = mysqli_fetch_array($query))
     {
         $balance=$result['balance'];
         $package = $result['package'];
         $comm=$result['set_comm'];
     }
  }
  
/*$t="trial";
$p="pro";
$b="basic";*/


if ($package=="pro") {
    $rechtoken = $token;
} elseif ($package=="basic") {
    $rechtoken = $token;
} else {   
 $rechtoken = $trialtoken;
}

//echo $rechtoken."<br>";
 
function opName($operatorId){
switch ($operatorId) {
    case 1:
        $operatorName= "Airtel";
        break;
    case 2:
        $operatorName= "Aircel";
        break;
    case 3:
        $operatorName= "Idea";
        break;
    case 4:
        $operatorName= "Bsnl Topup";
        break;
        
        case 5:
        $operatorName= "Bsnl Special";
        break;
        case 6:
        $operatorName= "Reliance CDMA";
        break;
        case 22:
        $operatorName= "Reliance GSM";
        break;
        case 7:
        $operatorName= "Tata Docomo Topup";
        break;
        case 8:
        $operatorName= "Tata Docomo Special";
        break;
        case 9:
        $operatorName= "Tata Indicom";
        break;
        case 10:
        $operatorName= "vodafone";
        break;
        case 11:
        $operatorName= "MTS";
        break;
        case 12:
        $operatorName= "Uninor";
        break;
        case 13:
        $operatorName= "Uninor Special";
        break;
        case 14:
        $operatorName= "Loop Mobile";
        break;    
    default:
        $operatorName= "";
}
return $operatorName;

}



if($balance <= 11)
{
   echo "<p id='p'>your account balance is low. You have to recharge your wallet <br/> <a href='index.php'>Back to Home</a></p>";
}   

else
{

if(isset($_POST['submit'])){

    //$id = rand(1000,9999);;
    $mobile=$_POST['number'];
    $amount=$_POST['amount'];
    $operatorId=$_POST['operator'];
    $operatorName=opName($operatorId);
    $time=date("y-m-d, h:i:s");
    //$final=200;
    //$username=$_POST["username"];
/*-----------------------------------------------------------------------------------*/

$dis_com = "select * from package where operator = '$operatorName'";
$gffy=mysqli_query($link,$dis_com);
$rows = mysqli_num_rows($gffy);
  if($rows > 0)
  {
     while($top = mysqli_fetch_array($gffy))
     {
        $p1= $top['trial'];
        $p2= $top['basic'];
        $p3= $top['pro'];
     }
  }
  
/*-----------------------------------------------------------------------------------*/
   
$commission = "select * from set_comm where operator = '$operatorName'";
$query=mysqli_query($link,$commission);
$rows = mysqli_num_rows($query);
  if($rows > 0)
  {
     while($result = mysqli_fetch_array($query))
     {
         $a=$result['operator'];
         $e=$result['0'];
         $f=$result['10%'];
         $g=$result['20%'];
         $h=$result['30%'];
         $i=$result['40%'];
         $j=$result['50%'];
         $k=$result['60%'];
         $l=$result['70%'];
         $m=$result['80%'];
         $n=$result['90%'];
         $o=$result['100%'];
         
     }
  }

 if($comm == 10)
 {
   $bft= $f;
 }
 
 elseif($comm == 20)
 {
   $bft= $g;
 }
  elseif($comm == 30)
 {
   $bft= $h;
 }
  elseif($comm == 40)
 {
   $bft= $i;
 }
  elseif($comm == 50)
 {
   $bft= $j;
 }
  elseif($comm == 60)
 {
   $bft= $k;
 }
  elseif($comm == 70)
 {
   $bft= $l;
 }
  elseif($comm == 80)
 {
   $bft= $m;
 }
  elseif($comm == 90)
 {
   $bft= $n;
 }
  elseif($comm == 100)
 {
   $bft= $o;
 }
  elseif($comm == 0)
 {
   $bft= $e;
 }
 else
 {
    //echo "<h3 style='color:red'>commission not set</h3>";
 }
 
 //echo "SET COMM: $bft<br>";
/*-----------------------------------------------------------------------------------*/
if($package == 'trial')
{
	$zt=$p1;
}
elseif($package == 'basic')
{
	$zt=$p2;
}
elseif($package == 'pro')
{
	$zt=$p3;
}
//echo "PACKAGE of Distributor: $zt<br>";

/*-----------------------------------------------------------------------------------*/  

/*--------------------------------------------------------------------------------*/
$tn=$zt*($bft/100);/* neew line for agent set com */
$tam=($amount*$tn)/100;/*important*/
echo "Final commission of Distributor: $tam <br>";
$b=($balance-$amount)+$tam;/*important*/
echo "Total Amount of Distributor: $b<br>";
    $sql="update dis_users set balance='$b' where dis_mobile='".$_SESSION['username']."'";
	if($query=mysqli_query($link,$sql))
	{
	     //echo '<script>window.alert("click here to recharge") </script>';
             
	}
	else
	{
	   mysqli_error($link);
	}
/*-----------------------------------------------------------------------------------*/	

    $status="PENDING";

    $insert="insert into recharge (mobile,username,amount,charge,old_balance,current_balance,dist_comm,agent_comm,operatorName,status,date) 
    values('$mobile','".$_SESSION['username']."','$amount','$charge','$balance','$b','$com','$ag','$operatorName','$status','$date')";
    if($query= mysqli_query($link,$insert))
      {
        $id=mysqli_insert_id($link);
    echo "<br> URID - $id, Mobile - $mobile , Amount - $amount  , OperatorId- $operatorId , Operator Name - $operatorName , Status - $status <hr />";
    
$url="manage.paydo.in/Rech?$api&amount=10&recharge_operator=$operatorId&recharge_number=$mobile&recharge_circle=2";
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
	if($curl_error == 28)
	{
		$status="PENDING";
	}		
    else{
           $xml = simplexml_load_string($output);
           $orderId=$xml->orderId;
           $status=$xml->status;
           $mobile=$xml->mobile;
           $amount=$xml->amount;
           $operatorId=$xml->operatorId;
           $error_code=$xml->error_code;
           $service=$xml->service;
           $resText=$xml->resText;
	    } 
           if($status=="PENDING")

           {
               if(mysqli_query($link,"update recharge set status='$status' , orderId='$orderId' , errorCode='$error_code' , resText='$resText' where id='$id'"))
               {

                         echo 'Recharge accepted and its status is PENDING.';
               }                              
			}
         elseif($status=="SUCCESS")
           {

               if(mysqli_query($link,"update recharge set status='$status' , orderId='$orderId' , opTxid='$operatorId',  errorCode='$error_code' , resText='$resText' where id='$id'" ))
               {

                    echo "Recharge success and its status is success , Transaction id is - $operatorId .";
               }
         }
         else {

             if(mysqli_query($link,"update recharge set status='$status' , orderId='$orderId' , errorCode='$error_code' , resText='$resText' where id='$id'"))
               {

                    echo "Recharge failed and its status is failed Contact to your Distrubutor <a href='index.php'>Retry</a> ";
               }
         }

      }
   } 
 
   echo "<br>".$output;  
                        

         
  $message = urlencode("Congratulation. Your recharge has been accepted of Rs.'$amount'");
 
    $response_type = 'json';

    $route = "4";
 
    $postData = array(
        'authkey' => $authkey,
        'mobiles' => $mobile,
        'message' => $message,
        'sender' => $sender,
        'route' => $route,
        'response' => $response_type
    );
 

   $url = "https://control.msg91.com/api/sendhttp.php?";
 
 
   $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        
    ));
 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 
 

    $output = curl_exec($ch);
     if (curl_errno($ch)) {
        echo 'error:' . curl_error($ch);
    }
 
    curl_close($ch);
    
           
  }

} 
//echo "<br>";
//echo "<br/>.<span id='span'><a href='welcome.php'>Back to Home</a></span>";
header("location: recharge_Status.php?ID=$id&ORDERID=$orderId&OPNAME=$operatorName&USERNAME=".$_SESSION['username']."");                                         
?>
						 