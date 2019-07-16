
<?php 
//MySqli veritabani connect
$servername = "127.0.0.1";
$username = "root";
$password = "";//eger apache servir paketi qurulmushsa burada sifre ehtiyac olmur bezi server pagetlerde sifre false olaraq gelir

$conn = new mysqli($servername,$username,$password);
 
 if ($conn->connect_error) {
   die("Connection failed: " .$conn->connect_error);
 }
 echo "Connection successfully";



//create new database 
 $sql = "CREATE DATABASE blog";
 if($conn->query($sql) === TRUE) {
   echo "Database created successfully";
 }else {
   echo "Error creating database: ".$conn->error;
 }

?>


