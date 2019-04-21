<!DOCTYPE html>
<html>
<head>
	<title>Apple Inc.</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<body>

<div class="main-content"> 
<!-- 
<h7 class="a">Unorder List</h7>

<ul>
	<li>html</li>
	<li>html</li>
	<li>html</li>
	<li>html</li>
	<li>html</li>
	<li>html</li>
</ul>
<h7 class="a">Order List</h7>

<ol type="A">
	<li>html</li>
	<li>html</li>
	<li>html</li>
	<li>html</li>
	<li>html</li>
	<li>html</li>
</ol>

<h8 class="a">Detail List</h8>

<dl class="a" >WEB DEVELOPMENT</dl>
<li>HTML</li>
	<li>CSS</li>
	<dl class="a" ">WEB DEVELOPMENT</dl>
	<li>JAVASCRIPT</li>
	<li>PHP</li>
<dt>
	<li>css</li>
	<li>jQuery</li>
	<li>javascript</li>
	<li>php</li>
	<li>html</li>
</dt>
</dl> -->
<!-- 3rd Class -->
<!-- <div class="container"> 
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4">
			<h1 class="a">First Div</h1>
			<img src="assets/img/img1.jpg" class="img-fluid rounded" width="100%"> 
			
			<p>Testing Image with bootstrap for div1</p>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
			<h1 class="a">Second Div</h1>
			<img src="assets/img/img2.jpg" class="img-fluid rounded" width="100%">
			<p>Testing Image with bootstrap for div2</p>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4">
			<h1 class="a">Third Div</h1>
			<img src="assets/img/img3.jpg" class="img-fluid rounded" width="100%">
			<p>Testing Image with bootstrap for div3</p>
		</div>
</div>
</div> -->

<!-- 4th and 5th Class -->

<nav class="navbar navbar-expand-md rounded footer navbar-light">
	<a href="index.php" class="navbar-brand"><img src="assets/img/img4.png" class="img-fluid" height="50" width="50">Apple Inc.</a>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsible-div">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsible-div">
	<ul class="navbar-nav justify-content-center w-100">
		<li class="nav-item">
				<a href="index.php" class="nav-link">Home</a>
			</li>
			<li class="nav-item ">
				<a href="aboutus.php" class="nav-link">About Us</a>
			</li>
			<li class="nav-item">
				<a href="portfolio.php" class="nav-link">Port Folio </a>
			</li>
			<li class="nav-item">
				<a href="contact.php" class="nav-link">Contact Us</a>
			</li>
			<li class="nav-item">
				<a href="privacypolicy.php" class="nav-link">Privacy Policy</a>
			</li>
			
			</ul>
	<!-- 		<ul class="navbar-nav justify-content-end w-100">
		<li class="nav-item">
				<a href="#signup.php" class="nav-link" data-toggle="modal" data-target="#SignUp" data-backdrop="static" keyboard="false"><i class="fas fa-user-plus"></i>SignUp</a>
			</li>
			<li class="nav-item">
				<a href="#login.php" class="nav-link" data-toggle="modal" data-target="#Login" data-backdrop="static" keyboard="false"><i class="fas fa-sign-in-alt"></i>Login</a>
			</li>
		</ul> -->

<ul class="navbar-nav justify-content-end w-100">
		<li class="nav-item">
				<a href="signup.php" class="nav-link"><i class="fas fa-user-plus"></i>SignUp</a>
			</li>
			<li class="nav-item">
				<a href="login.php" class="nav-link"><i class="fas fa-sign-in-alt"></i>Login</a>
			</li>
		</ul>



</div>


</nav>

<!-- 7th class -->
<!-- Sing-up Form -->
<div class="fade modal" id="SignUp" tabindex="-1">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title b" >Signup</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Username</label>
					<input class="form-control" type="text" name="name">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="Email" name="email">
									</div>
								<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="password" name="password">
									</div>
									<div class="form-group">
					<label>Confirm Password</label>
					<input class="form-control" type="password" name="confirm_password">
									</div>
								
		

			</div>
			<div class="modal-footer">
				
				<button class="btn btn-success">Submit</button>
				<button class="btn btn-primary" data-dismiss="modal">Close</button>

			</div>

		</div>

	</div>


</div>

<!-- Sign-in Form -->

<div class="fade modal" id="Login" tabindex="-1">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title b" >Login</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Username</label>
					<input class="form-control" type="text" name="name">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="Email" name="email">
									</div>
																		
			</div>
			<div class="modal-footer">
				
				<button class="btn btn-success">Login</button>
				<button class="btn btn-primary" data-dismiss="modal">Close</button>

			</div>

		</div>

	</div>


</div>

