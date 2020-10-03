<?php
require 'connect.php';
//lựa chọn CSDL ở trên máy chủ
$db = mysqli_select_db($conn,'sql_study');
if($db == null)
     echo'<br>Không chọn được database';
//sql to create table
$sql ="CREATE TABLE users(
     userId VARCHAR(25) NOT NULL,
	 password VARCHAR(25) NOT NULL,
	 regDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	 PRIMARY KEY (userId)
)";
if($conn->query($sql) === TRUE){
     echo "Table User created successfully";
}else{
     echo "Error creating table:" . $conn->error;
}

$conn->close();
?>