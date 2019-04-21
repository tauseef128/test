<?php 
session_start();
require_once 'connection.php';
	if(isset($_POST['signup_submit'])){	
		$name    = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2    = $_POST['password2'];
		
		$query = "INSERT into  users (role_id,name,email,password,created_at) values('2','".$name."', '".$email."','".md5($password)."','".date('Y-m-d')."')";
		if($conn->query($query) === true){
			$_SESSION['success'] = true;
			$_SESSION['error'] = false;
			$_SESSION['message'] = "Record inserted successfully";

			
		}else{
			$_SESSION['success'] = false;
			$_SESSION['error'] = true;
			if($conn->error){
				$_SESSION['message'] = $conn->error;
			}else{
				$_SESSION['message'] =  "something went wrong";
			}
		}
		header('location: signup.php');
	}

	if(isset($_POST['login_submit'])){
		$email    = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * from users where email = '".$email."'  AND password = '".md5($password)."' and role_id = '2' ";
		$result = $conn->query($query);
		if($result->num_rows > 0){
			
			$user = $result->fetch_assoc();
			session_start();
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['role_id'] = $user['role_id'];
			$_SESSION['name'] = $user['name'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['success'] = true;
			$_SESSION['error'] = false;
			header('location:index.php');
			
		}else{
			$_SESSION['error'] = true;
			if($conn->error){
				$_SESSION['message'] = $conn->error;
			}else{
				$_SESSION['message'] =   "Invalid email or password";
			}
			header('location:login.php');
		}
	}
?>