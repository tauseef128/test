<?php
error_reporting(0);
$conn = new mysqli('localhost','root','','medical_equipment');

if($conn->connect_errno > 0){
	echo $conn->connect_error;
}
?> 