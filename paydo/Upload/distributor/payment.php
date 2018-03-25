<?php
  require_once '../config/config.php';
echo "<br/>";

$status = $_GET["status"];
//echo $status."<br>";
$amount = $_GET["amount"];
$txid = $_GET["txid"];
$res = $_GET["reason"];

echo "<br> STATUS - $status, Mobile - $mobile , Amount - $amount  , TRANSACTION ID - $txid, REASON - $res<hr /><br/>";

   echo "<center><a href='welcome.php' class='btn btn-primary'>Back</a></center>";
   
  include './theme/footer.php';
?>