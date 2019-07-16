<?php 
//PDO veritabani connect
$servername = "localhost";
$username = "root";
$password = "";

try {
   $conn = new PDO("mysql:host=$servername",$username, $password);

   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
   //New Create database
   $sql = "CREATE DATABASE blog1";
   $conn->exec($sql);
//New Create database
   echo "Connected successfully";
} catch (Exception $e) {
   echo "Connected failed: ".$e->getMessage();
}

 ?>
