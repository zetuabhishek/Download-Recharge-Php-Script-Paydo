<?php
require_once 'config.php';

        $info="select * from recharge order by id desc";
	$query=mysqli_query($link,$info);
	$rows=mysqli_num_rows($query);
	
if($rows>0)
{
?>
<table border="2">
<tr>
<th>token No.</th><th>ID</th><th>Status</th><th>Ordedr ID</th><th>Mobile No.</th><th>Operator Name</th><th>Amount</th><th>Username</th><th>Balance</th><th>Distributor</th><th>Package</th><th>Commission</th><th>Dis Package</th><th>Package of Agent</th>
</tr>

<?php

while($result=mysqli_fetch_assoc($query))
{	
		$id = $result["id"];
		$statusee = $result["status"];
		$orderid = $result["orderId"];
		$amount = $result["amount"];
		$operatorName = $result["operatorName"];
		$username = $result["username"];
		$mobile = $result["mobile"];
echo $amount."<br>";
/*----------------------------------------------------------------------------------------------------------------*/
$find = "select * from dis_users where dis_mobile= '$username'";
$query1=mysqli_query($link,$find);
$mmm = mysqli_num_rows($query1);

$result = mysqli_fetch_array($query1);
 
         $balance=$result['balance'];
         $comm =$result['set_comm'];
         $malik=$result['under']; 
         $package=$result['package'];
  echo $balance."<br>";      
         
$t="trial";
$p="pro";
$b="basic";

if ($p == $package) {
    $rechtoken = $token;
} elseif ($b == $package) {
    $rechtoken = $token;
} else {
    
 $rechtoken = $trialtoken;

}
echo $rechtoken."<br><br>";         
/*-----------------------------------------------------------------------------------*/
$dis_com = "select * from package where operator = '$operatorName'";
$gffy=mysqli_query($link,$dis_com);

$top = mysqli_fetch_array($gffy);

        $p1= $top['trial'];
        $p2= $top['basic'];
        $p3= $top['pro'];

/*---------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
$commission = "select * from set_comm where operator = '$operatorName'";
$q=mysqli_query($link,$commission);
//$zzz = mysqli_num_rows($query);

while($zetu = mysqli_fetch_array($q))
{
         $a=$zetu['operator'];
         $e=$zetu['0'];
         $f=$zetu['10%'];
         $g=$zetu['20%'];
         $h=$zetu['30%'];
         $i=$zetu['40%'];
         $j=$zetu['50%'];
         $k=$zetu['60%'];
         $l=$zetu['70%'];
         $m=$zetu['80%'];
         $n=$zetu['90%'];
         $o=$zetu['100%'];   
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
    echo "<h3 style='color:red'>commission not set</h3>";
 }

//echo "SET COMM: $bft<br>";
/*-----------------------------------------------------------------------------*/
$abc = "select * from dis_users where dis_mobile = '$malik'";
$xyz=mysqli_query($link,$abc);
$row = mysqli_num_rows($xyz);
$sss = mysqli_fetch_array($xyz);

         $a=$sss['package'];
         $man=$sss['balance'];
        
if($a=="trial")
{
   $ram=$p1;
}
elseif($a=="basic")
{
   $ram=$p2;
}
elseif($a=="pro")
{
   $ram=$p3;
}
else
{
    echo "package has to be fixed<br/>";
}
//echo "DIS_PACKAGE: $ram<br>";
/*--------------------------------------------------------------------------*/ 
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
//echo "PACKAGE of Agent: $zt<br>";
/*---------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/		 
/*---------------------------------------------------------------------------------------------------------*/
if($statusee=="REFUND")
{
   echo "Already refunded";
}
else
{		   

$url="http://api.rechapi.com/api_status.php?format=xml&token=$rechtoken&orderId=$orderid";

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
if($getserver["http_code"]==200 || $curl_error=="28")
{
$xml = simplexml_load_string($output);
foreach($xml as $nxml){
//$orderid=$nxml[id];
$status=$nxml->status;
$mobile=$nxml->mobile;
$txid=$nxml->transactionId;
$amount=$nxml->amount;
$error_code=$nxml->error_code;
$bal=$nxml->bal;
$resText=$nxml->resText;


/*-----------------------------------------------------------------------------------*/ 

//echo "<br> STATUS - $status, Mobile - $mobile , Amount - $amount  , TRANSACTION ID - $txid, API BALANCE - $bal , REASON - $resText <hr />";

if($status=="PENDING")

{
      if(mysqli_query($link,"update gas set status='$status', opTxid='$txid', errorCode='$error_code' , resText='$resText' where id='$id'"))
      {
          //echo "Recharge accepted and its status is PENDING.";
      }              

}
elseif($status=="SUCCESS")
{

      if(mysqli_query($link,"update gas set status='$status' , opTxid='$txid',  errorCode='$error_code' , resText='$resText' where id='$id'" ))
      {
        //echo "Recharge success and its status is success , Transaction id is - $txid .";
      }
}
else
{
if(mysqli_query($link,"update gas set status='$status' , opTxid='$txid',  errorCode='$error_code' , resText='$resText' where id='$id'" ))
  {
        echo "Recharge failed and its status is failed , Transaction id is - $txid .";
/*----------------------------------------------------------------------------------------------------------------*/		    
/*----------------------------------------------------------------------------------------------------------------*/        
/*--------------------------------------------------------------------------------*/
$b=($balance+$amount)+$zt;/*important*/
//echo "Total Amount of Distributor: $b<br>";
    $sql="update dis_users set balance='$b' where dis_mobile='$username'";
	if($query=mysqli_query($link,$sql))
	{
	   $statuse="REFUND";
	   mysqli_query($link,"update gas set status='$statuse' where username='$username'"); 
	}
	else
	{
	   mysqli_error($link);
	}
   } 
 } 
 } 
}
}	   
	
/*-----------------------------------------------------------------------------------------------------*/ 
/*-----------------------------------------------------------------------------------------------------------*/	
	   
?>
<tr>
<td><?php echo $rechtoken ; ?></td>
<td><?php echo $id; ?></td><td><?php echo $statusee; ?></td><td><?php echo $orderid; ?></td><td><?php echo $mobile; ?></td><td><?php echo $operatorName; ?></td><td><?php echo $amount; ?></td><td><?php echo $username;?></td><td><?php echo $balance; ?></td>
<td><?php echo $malik; ?></td><td><?php echo $package; ?></td><td><?php echo $bft; ?></td><td><?php echo $com; ?></td><td><?php echo $ag; ?></td> 
</tr>
<?php
}
?>    
</table> 

<?php   
}  
?>
