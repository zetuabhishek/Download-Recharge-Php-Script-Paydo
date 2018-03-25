<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'gffyj_hyy');
define('DB_PASSWORD', 'OUn)f&]8BERc');
define('DB_NAME', 'gffyj_hyy');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$trialtoken = "qwKSFX2jFHyvk2rCpunJ3VLBFljtH1";
$rechtoken = "qwKSFX2jFHyvk2rCpunJ3VLBFljtH1";
?>