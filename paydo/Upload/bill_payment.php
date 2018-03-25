<?php
require_once './config/config.php';
require_once './theme/header.php';


if(!isset($_SESSION['mobile']) || empty($_SESSION['mobile'])){
  header("location: index.php");
  exit;
}
//echo 
$mobile = $_SESSION['mobile'];
//echo $mobile."<br>";

$find = "select * from users where mobile = '".$_SESSION['mobile']."'";
$query=mysqli_query($link,$find);
$rows = mysqli_num_rows($query);
  if($rows > 0)
  {
     while($result = mysqli_fetch_array($query))
     {
       
         $balance=$result['balance'];
         $malik=$result['under']; 
         $comm =$result['set_comm'];
         $package = $result['package'];
     }
  }
  //echo $package."<br>";

/*-----------------------------------------------------------------------------------*/

$dis_com = "select * from bill_package order by pro desc";
$gffy=mysqli_query($link,$dis_com);
$rows = mysqli_num_rows($gffy);
if($rows > 0)
{
/*------------------------------------------------------------------------------------*/  
?>     
<table class="table table-hovered" border="2">
<?php
if($malik == !null){
echo "<h3>Your distributor contact number is $malik</h3><br/>";
}else{
}
?>
        <thead>
        <tr>
          <th>Package is <?php echo $package; ?></th><th>Set Percentage </th><th>Operator Name</th><th>Surcharges of Agent</th>
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

$abc = "select * from dis_users where dis_mobile = '$malik'";
$xyz=mysqli_query($link,$abc);
$rows = mysqli_num_rows($xyz);
  if($rows > 0)
  {
     while($sss = mysqli_fetch_array($xyz))
     {
         
         $a=$sss['package'];
         $man=$sss['balance'];
         //echo $a;
     }
  }
 //echo "DISTRIBUTORS BALANCE: $man<br>";
  

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
    //echo "package has to be fixed<br/>";
}
//echo "DIS_PACKAGE: $ram<br>";


/*-----------------------------------------------------------------*/  
   //echo "..........................".$a."<br/>";

  /*--------------------------------------------------------------------------------*/
if($malik == !null)
{
if($p==$op)
   {
      $tam = ($ram*$bft)/100;
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
$tx=$tam+$ram;
?>
        <tbody>
          <tr>
          <td><?php echo $ram; ?>%</td><td><?php echo $bft; ?>%</td><td><?php echo $p; ?></td><td>-<?php echo  $tx; ?></td>
          </tr>
        </tbody> 
<?php       
}
else{

    //echo $zz."<br>";
    $ag=($zt*$bft)/100;
    //$z=($balance-$amount)+$ag;
    //echo "Agent commission not under distributor: $ag<br>";
?>
        <tbody>
          <tr>
          <td><?php echo $zt; ?></td><td><?php echo $bft; ?>%</td><td><?php echo $p; ?></td><td><?php echo $ag; ?></td><!--<td><?php echo $ag; ?></td>-->
          </tr>
        </tbody> 
      
<?php          	
}
 	
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
<?php 
 include './theme/footer.php';
?>
		