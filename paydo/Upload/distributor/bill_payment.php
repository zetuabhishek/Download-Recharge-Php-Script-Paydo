<?php
require_once '../config/config.php';
//require_once 'config.php';
require_once '../theme/header.php';

session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
//echo 
$mobile = $_SESSION['mobile'];
//echo $mobile."<br>";

$find = "select * from dis_users where dis_mobile = '".$_SESSION['username']."'";
$query=mysqli_query($link,$find);
$rows = mysqli_num_rows($query);
  if($rows > 0)
  {
     while($result = mysqli_fetch_array($query))
     {
       
         $balance=$result['balance'];
         $comm =$result['set_comm'];
         $package = $result['package'];
     }
  }
  //echo $package."<br>";

/*-----------------------------------------------------------------------------------*/

$dis_com = "select * from bill_package order by operator";
$gffy=mysqli_query($link,$dis_com);
$rows = mysqli_num_rows($gffy);
  if($rows > 0)
  {
/*------------------------------------------------------------------------------------*/  
?>     
<table class="table table-hovered" border="2">
        <thead>
        <tr>
          <th>Package is <?php echo $package; ?></th><th>Commission Set</th><th>Operator Name</th><th>Commission of Agent</th>
        </tr>
        </thead>
<?php    
     while($top = mysqli_fetch_array($gffy))
     {               
        $p=$top['operator'];
        $p1= $top['trial'];
        $p2= $top['basic'];
        $p3= $top['pro'];
 
//echo $p."<br>";  
/*------------------------------------------------------------------------------------*/
   
$commission = "select * from bill_set_comm where operator = '$p'";
$query=mysqli_query($link,$commission);
$rows = mysqli_num_rows($query);
  if($rows > 0)
  {
     while($result = mysqli_fetch_array($query))
     {
         $op=$result['operator'];
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
/*-----------------------------------------------------------------*/
if($comm == 10)
 {
   $bft= $o;
 }
 
 elseif($comm == 20)
 {
   $bft= $n;
 }
  elseif($comm == 30)
 {
   $bft= $m;
 }
  elseif($comm == 40)
 {
   $bft= $l;
 }
  elseif($comm == 50)
 {
   $bft= $k;
 }
  elseif($comm == 60)
 {
   $bft= $j;
 }
  elseif($comm == 70)
 {
   $bft= $i;
 }
  elseif($comm == 80)
 {
   $bft= $h;
 }
  elseif($comm == 90)
 {
   $bft= $g;
 }
  elseif($comm == 100)
 {
   $bft= $f;
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
//echo "PACKAGE: $zt<br>";

//echo $bft."<br>"; 
/*-----------------------------------------------------------------------------------*/  
/*-----------------------------------------------------------------*/  
   //echo "..........................".$a."<br/>";

  /*--------------------------------------------------------------------------------*/
if($p==$op)
   {
      $tam = ($zt*$bft)/100;
      //echo "Commission of Agent: $set_comm<br>";
   }
//$tam=($ram*$bft)/100;/*important*/
//$ag=$amount*($tam/100);
//echo "Final commission of Agent: $tam <br>";
//$per=$ram-$tam;/*important*/
//$com=($amount*$per)/100;/*important*/
//echo "Final commission of Distributor: $per <br>";
//$b=($balance-$amount)+$ag;/*important*/
//echo "Total Amount of Agent: $b<br>";
//$f_com = $man+$com;/*important*/
//echo "Distributor Amount: $f_com<br>";
?>
        <tbody>
          <tr>
          <td><?php echo $zt; ?>%</td><td><?php echo $bft; ?>%</td><td><?php echo $p; ?></td><td><?php echo  $tam; ?></td>
          </tr>
        </tbody> 
<?php       
/*-----------------------------------------------------------------------------------*/	    
 }
?> 
</table/> 
<?php
}                           
?>
<style>
.table
{
text-align:center;
font-color:green;
}
thead th {
    background-color: #aed581;
    color: #e91e63;
   }
 tbody td {
    background-color: #4dd0e1;
}   
</style>
		