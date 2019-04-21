<?php

		require_once '../connection.php';
		session_start();
		if(isset($_POST['login_submit'])){
			$email    = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * from users where email = '".$email."'  AND password = '".md5($password)."' ";
			$result = $conn->query($query);
			if($result->num_rows > 0){
				
				$user = $result->fetch_assoc();
				
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['role_id'] = $user['role_id'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
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

		if(isset($_POST['category_submit'])){	
		$name    = $_POST['name'];
		$description = $_POST['description'];
	 	$directory = 'categoryuploads/';
		$target_dir = $directory.basename($_FILES['filetoupload']['name']);
		if(move_uploaded_file($_FILES['filetoupload']['tmp_name'], $target_dir)){
		$query = "INSERT into  categories (name,description,image_uri,created_at) VALUES('".$name."', '".$description."','".$_FILES['filetoupload']['name']."','".date('Y-m-d')."')";
		$conn->query($query);

			
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
		header('location: category-add.php');
	}

		if(isset($_POST['product_submit'])){	
			$category_id    = $_POST['category_id'];
			$name    = $_POST['name'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];
			$directory = 'productuploads/';
			$target_dir = $directory.basename($_FILES['filetoupload']['name']);

			if(move_uploaded_file($_FILES['filetoupload']['tmp_name'], $target_dir)){
			$query = "INSERT into  products (category_id,name,price,quantity,description,image_uri,created_at) values('".$category_id."', '".$name."','".$price."','".$quantity."','".$description."','".$_FILES['filetoupload']['name']."','".date('Y-m-d')."')";
			$conn->query($query);
				$_SESSION['success'] = true;
				$_SESSION['error'] = false;
				$_SESSION['message'] = "Product inserted successfully";
			}else{
				$_SESSION['success'] = false;
				$_SESSION['error'] = true;
				if($conn->error){
					$_SESSION['message'] = $conn->error;
				}else{
					$_SESSION['message'] =  "something went wrong";
				}
			}
			header('location: product-add.php');
		}
	// if(max($_FILES['filetoupload']['error']) == 0){
	// 			foreach ($_FILES['filetoupload']['error'] as $key => $value) 
	// 			{
	// 				$directory = 'categoryuploads/';
	// 				$target_dir = $directory.basename($_FILES['filetoupload']['name'][$key]);
	// 				if(move_uploaded_file($_FILES['filetoupload']['tmp_name'][$key], $target_dir)){
	// 					$sql = "INSERT into category_detail (category_id, image_uri) VALUES ('".$conn->insert_id."','".$_FILES['filetoupload']['name'][$key]."')";
	// 					$conn->query($sql);

	// 				}

	// 			}
	// 		}

?>