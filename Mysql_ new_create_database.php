<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "blog";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
   die("Connection failed".$conn->connect_error);
} 

$sql = "CREATE TABLE new_table(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(100) NOT NULL,lastname VARCHAR(100) NOT NULL ,email VARCHAR(100),data TIMESTAMP )";
if ($conn->query($sql) === TRUE) {
   echo "Table new_table create successfully";
}else {
   echo "Error create table: ".$conn->error;
}
$conn->close();

 ?>
