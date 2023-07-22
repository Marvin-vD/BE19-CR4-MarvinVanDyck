<?php 

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "be19_cr4_marvinvandyck_biglibrary";

$connect = new mysqli($hostname, $username, $password, $dbname);

if(!$connect) {
   die( "Connection failed: " . mysqli_connect_error() );
}
?>