<?php  
$dbHost     = "127.0.0.1:3306";  
$dbUsername = "u130083126_deletehunger";  
$dbPassword = "Deletehunger@2024";  
$dbName     = "u130083126_deletehunger";  
  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
?>