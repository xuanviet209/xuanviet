<?php
$servername ="localhost";
$username ="root";
$password = ""; // ko có password

// create connection
$conn = new mysqli($servername, $username, $password);

//Check connection
if($conn->connect_error){
     die("Connection failed:" .$conn->connect_error);
}
echo " Connection successfully";
?>