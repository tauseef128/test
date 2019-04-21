<?php 
session_start();
$_SESSION['base_url'] = 'http://localhost/webdevelopment/admin/';
if( !isset($_SESSION['user_id']) || !isset($_SESSION['role_id']) || $_SESSION['role_id'] != 1) {

	header('location: login.php');
}

?>