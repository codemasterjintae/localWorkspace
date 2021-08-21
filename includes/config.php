<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karthick_training";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query($sql);

if($conn->query($sql)===TRUE)
	{
	include "login.php";
	}else {
		echo "Error creating table: " . $conn->error;
		}
?>