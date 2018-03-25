<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
 
}

require_once '../config/config.php';

$username = $_SESSION['username'];

$query = "SELECT * FROM users where under='".$username."'";
$query_run = mysqli_query($link,$query);

$qty= 0;
while ($num = mysqli_fetch_assoc ($query_run)) {
    $qty += $num['balance'];
}
//echo $qty;

?>