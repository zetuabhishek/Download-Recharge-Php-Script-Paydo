<?php

/*$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn=new mysqli($servername,$username,$password,$dbname);*/
 
 //require_once ('test.php');
 require_once ('info.php');
 //require_once "url.php";
 
 $comm = 3.50;
 $method='UPI';
 $trans_id=rand(1000,9999);
 //$value=$_GET['amount'];
 $final = 200;
 
 $tam = ($comm/100) * $final;
 
 //echo $tam;
 
 $f_am = $final+$tam;
 
 //$value+$tam;
$date = date('m/d/Y h:i:s', time());
$z=$f_am+$d;
//echo $date;
$email = 'boseabhishek975@gmail.com';
 
 $update = "update users set balance='$z' where email='$email'";
 $zzz=mysqli_query($conn,$update);
 
 $wallet="insert into statement (amount,paymentmethod,particular,transactionid,date,commission,total_amount)
         values('".$final."', '".$method."','".null."', '".$trans_id."','".$date."','".$comm."','".$f_am."')";
     
 $sss = mysqli_query($conn,$wallet);
 		 

?>