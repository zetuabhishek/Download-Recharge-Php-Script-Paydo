<?php
if(isset($_POST["submit"]))
{
$filename = $_POST["filename"];
// MySQL host
$mysqli_host = $_POST["servername"];
// MySQL username
$mysqli_username = $_POST["username"];
// MySQL password
$mysqli_password = $_POST["password"];
// Database name
$mysqli_database = $_POST["db"];
//////////////////////////////////////////////////////////////////////////////////////////////
// Connect to MySQL server
$link = mysqli_connect($mysqli_host, $mysqli_username, $mysqli_password) or die('Error connecting to MySQL server: ' . mysqli_error());

// Select database
mysqli_select_db($link,$mysqli_database) or die('Error selecting MySQL database: ' . mysqli_error($link));
// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line_num => $line) {
// Only continue if it's not a comment
if (substr($line, 0, 2) != '--' && $line != '') {
// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';') {
// Perform the query
if(mysqli_query($link,$templine) or print('Error performing query \'<b>' . $templine . '</b>\': ' . mysqli_error($link) . '<br /><br />'))
{
	//echo "table installed successfully";
}
else
{
	echo "table not installed".mysqli_error($link);
}
// Reset temp variable to empty
$templine = '';
echo "table installed successfully";

        }
      }
    }
   echo '<script>window.alert("table installed successfully");
   window.location="setting.php";
   </script>'; 
}
?>
