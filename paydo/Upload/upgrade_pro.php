Editing:  
/home/gffyj/public_html/response.php
 Encoding:       

<?php
require_once 'config/config.php';

ini_set('display_errors',1);
error_reporting(E_ALL);

$secret_key = "578a6ae28317092cb8db94202be68582";	 // Pass Your Registered Secret Key from EBS secure Portal
if(isset($_REQUEST)){
     $response = $_REQUEST;
     $sh = $response['SecureHash'];	
     $params = $secret_key;
     ksort($response);
		    foreach ($response as $key => $value){
		        if (strlen($value) > 0 and $key!='SecureHash') {
				        $params .= '|'.$value;
			        }
		        }
				
    //$hashValue = strtoupper(md5($params));//for MD5
    //$hashValue = strtoupper(hash("sha1",$params));//for SHA1
    $hashValue = strtoupper(hash("sha512",$params));// for SHA512
  	 if($sh!=$hashValue)
		// echo "<center><h3>Hash validation Failed!</H3></center>";


$data['response'] = $response;	
$data['message'] = $response['ResponseMessage'];
$data['code']=$response['ResponseCode'];
$data['amount']=$response['Amount'];
$data['date']=$response['DateCreated'];
$data['id']=$response['PaymentID'];
//$data['Error']=$response['Error'];
$data['Transactionid']=$response['TransactionID'];
$data['Phone']=$response['BillingPhone'];
$data['name']=$response['BillingName'];
//$data['flag']=$response['IsFlagged'];
$data['ref']=$response['MerchantRefNo'];
$data['request']=$response['RequestID'];
$data['txid']=$response['TransactionID'];
$data['email']=$response['BillingEmail'];
$data['address']=$response['BillingAddress'];
$data['city']=$response['BillingCity'];
$data['pin']=$response['BillingPostalCode'];
$data['state']=$response['BillingState'];
$data['date']=$response['DateCreated'];
$data['method']=$response['PaymentMethod'];
$data['country']=$response['DeliveryCountry'];

//echo $data['ref'];
//echo $data['Phone']."<br>";

if(isset($link))
{
  $query= mysqli_query($link,"select *from ebs where phone='".$data['Phone']."' order by ref_no");
  $rows=mysqli_num_rows($query);
  if($rows>0)
  {
  if($result=mysqli_fetch_array($query))
  {
    $id=$result["ref_no"];
    //echo $id."<br>";
  }
  
  }
}


$query1=mysqli_query($link,"select * from users where mobile='".$data['Phone']."' ");

$row = mysqli_num_rows($query1);

if($row>0)
{
     while($result = mysqli_fetch_array($query1))
     {
         $balance=$result['balance'];
          
     }
     //echo $balance."<br>";
} 
  $zetu_f= $balance+$data['amount'];
  
$insert="insert into ebs(ref_no,payment_id,payment_method,request_id,status,response_code,transaction_Id,amount,address,city,country,email,name,phone,pin_code,state,payment_date)
values('".$data['ref']."','".$data['id']."','".$data['method']."','".$data['request']."','".$data['message']."','".$data['code']."','".$data['txid']."','".$data['amount']."','".$data['address']."','".$data['city']."','".$data['country']."','".$data['email']."','".$data['name']."','".$data['Phone']."','".$data['pin']."','".$data['state']."','".$data['date']."')";
        if($zetu=mysqli_query($link,$insert))
        {
		echo "data inserted successfully";
         
     
             mysqli_query($link,"update users set package='pro' where mobile='".$data['Phone']."'");
 echo "You has been Upgrade to Pro Retailer";
header("location: paymentdone.php?message=".$data['message']."");
} else {
    echo "You has been Not Upgrade to Pro Retailer";
}
 require_once 'theme/header.php'; 



?>
<center>
<table width='100%' cellpadding='0' cellspacing="0" ><tr><th width='90%'>&nbsp;</th></tr></table>
	<center><h3>Response</H3></center>
	<center><h3 style="color:green"><?php echo $data['message']; ?></h3></center>
    <table width="600" cellpadding="2" cellspacing="2" border="0">
        <tr>
            <th colspan="2">Transaction Details</th>
        </tr>
<?php
		foreach( $response as $key => $value) {
?>			
        <tr>
            
            <td class="fieldName" align="left" width="50%"><?php echo $value; ?></td>
        </tr>
<?php
	}
  }	
?>		
	</table>
	   <p><a href="welcome.php">Back</a></p>
</center>
<table width='100%' cellpadding='0' cellspacing="0" ><tr><th width='90%'>&nbsp;</th></tr></table>
<center><a href="welcome.php">Back</a></center>
<?php require_once 'theme/footer.php'; ?>
</body>
</html>

