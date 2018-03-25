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
$mobile = $_SESSION['username'];
//echo $mobile."<br>";

$find = "select * from dis_users where dis_mobile = '".$_SESSION['username']."'";
$query=mysqli_query($link,$find);
$rows = mysqli_num_rows($query);
  if($rows > 0)
  {
     while($result = mysqli_fetch_array($query))
     {
       
         $balance=$result['balance'];
         $package = $result['package'];
         $comm=$result["set_comm"];
     }
  }
  //echo $package."<br>";

/*-----------------------------------------------------------------------------------*/

$dis_com = "select * from package order by operator";
$gffy=mysqli_query($link,$dis_com);
$rows = mysqli_num_rows($gffy);
  if($rows > 0)
  {
/*------------------------------------------------------------------------------------*/  
?>     
<table class="table table-hovered" border="2">
        <thead>
        <tr>
        <th>Package is <?php echo $package; ?></th><th>Commission Set</th><th>Operator Name</th><th>Commission of Distributor</th>
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
   
$commission = "select * from set_comm where operator = '$p'";
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
   //echo "..........................".$a."<br/>";
   $ag=($zt*$bft)/100;
  /*--------------------------------------------------------------------------------*/
?>
        <tbody>
          <tr>
          <td><?php echo $zt; ?></td><td><?php echo $comm; ?>%</td><td><?php echo $p; ?></td><td><?php echo $ag; ?>%</td>
          </tr>
        </tbody> 
<?php       
}
/*-----------------------------------------------------------------------------------*/	    
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
		