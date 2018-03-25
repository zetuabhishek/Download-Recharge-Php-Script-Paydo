<?php
require_once './config/config.php';
//require_once 'status_cron.php';
        $info="select * from recharge";
	$query=mysqli_query($link,$info);
	$rows=mysqli_num_rows($query);
	
 
         

   while($result=mysqli_fetch_assoc($query))
	{
 
/*----------------------------------------------------------------*/   
        //echo '<pre>';  
	    //print_r($result)."<br/>";
        //echo '</pre>';
        //foreach		
		$id = $result["id"];
		//$status = $result["status"];
		$orderid = $result["orderId"];
		$amount = $result["amount"];
		$operatorName = $result["operatorName"];
		$username = $result["username"];
 
		
$find = "select * from users where username = '$username'";
$query=mysqli_query($link,$find);
$mmm = mysqli_num_rows($query);
 $result = mysqli_fetch_array($query);
  
         $balance=$result['balance'];
         $comm =$result['set_comm'];
         $malik=$result['under']; 
         $package=$result['package'];
 
  echo $balance."<br>";
  echo $package."<br>";
  echo $malik."<br>";
  echo $comm."<br>";
//echo  $_SESSION['username'];

//echo $operatorName;
/*-----------------------------------------------------------------------------------*/

$dis_com = "select * from package where operator = '$operatorName'";
$gffy=mysqli_query($link,$dis_com);
//$xxx = mysqli_num_rows($gffy);

        $p1= $top['trial'];
        $p2= $top['basic'];
        $p3= $top['pro'];
 
/*-----------------------------------------------------------------------------------*/
$commission = "select * from set_comm where operator = '$operatorName'";
$query=mysqli_query($link,$commission);
//$zzz = mysqli_num_rows($query);

     $zetu = mysqli_fetch_array($query);
    
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

  //echo $a;

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
   $bft= $k;
 }
  elseif($comm == 60)
 {
   $bft= $g;
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
  
  //echo $balance;
$abc = "select * from dis_users where dis_username = '$malik'";
$xyz=mysqli_query($link,$abc);
$row = mysqli_num_rows($xyz);
 $sss = mysqli_fetch_array($xyz);
 
         $a=$sss['package'];
         $man=$sss['balance'];
 
if($a=="trial")
{
   $ram=$p1-$bft;
}
elseif($a=="pro")
{
   $ram=$p2-$bft;
}
elseif($a=="basic")
{
   $ram=$p3-$bft;
}
else
{
    //echo "Commission has to be fixed";
} 
echo $ram."<br/" ;
/*--------------------------------------------------------------------------*/ 
if($package = 'trial')
{
	$zt=$p1;
}
elseif($package = 'basic')
{ 
	$zt=$p2;
}
elseif($package = 'pro')
{
	$zt=$p3;
}
else
{
   //echo "Package has to be fixed";
} 
echo $zt."<br>";

echo $bft."<br>"; 


             if($malik == !null)
              {
                   $per=($ram/100)*$amount;
                   $tam=($bft/100)*$amount;
                   $z= ($balance-$tam)+$amount;
                   //echo "PER: $per.<br>";
                   //echo "TAM: $tam.<br>";
                   //echo "Z: $z.<br>";
                    
                   $d_com = $man-$per;
                   
                   //echo $d_com."<br>";
                    
                    if(mysqli_query($link,"update users set balance='$z' where username='$username'"))
                    {
                          $statuse="REFUND";
                          mysqli_query($link,"update recharge set status='$statuse' where id='$id'");
                          mysqli_query($link,"update dis_users set balance='$d_com' where dis_username='$malik'");
                          echo "table updated";
                    } 
              }
              else
              {
                 $pc=($zt*$amount)/100;
                 $zz= ($balance-$pc)+$amount;
                 //echo "PC: $pc.<br>";
                 //echo "ZZ: $zz.<br>";
                 mysqli_query($link,"update users set balance='$zz' where username='$username'");
              }    

         }
         $result++;
		      
?>
	
/*-----------------------------------------------------------------------------------*/ 
