<?php
$sname="127.0.0.1:3306";
$uname="u130083126_deletehunger";
$password="Deletehunger@2024";
$db_name="u130083126_deletehunger";
$conn=mysqli_connect($sname,$uname,$password,$db_name);

if(!$conn){
    echo "Connection Failed";
}