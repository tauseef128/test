<!DOCTYPE html>
<html>
<head>
	<title>UI Learning</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
</head>
<body>
		<div class="container login-container">
			<div class="row">
				<div class="offset-md-4 col-md-4">
					<h4 class="login-heading"> Sign In </h4>
					<div class="form-group">
						<label>Email</label>
						<input class="form-control test" type="email" name="email" id="email" value="" >
						<span class="email-error">Email is required</span>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control test" type="password" name="password" id="password" value="" >
						<span class="password-error">Password is required</span>
					</div>
					<div class="form-group">
						<button class="btn btn-success btn-block login-submit float-left">Submit</button>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.login-submit').click(function(){
					var email = $('#email').val();
					var password = $('#password').val();
					if(email == ''){
						$('.email-error').show(500);
						$('#email').addClass('error');
						$('#email').removeClass('success');
					}else{
						$('.email-error').hide();
						$('#email').removeClass('error');
						$('#email').addClass('success');
					}
					if(password == ''){
						$('.password-error').show(500);
						$('#password').addClass('error');
						$('#password').removeClass('success');
					}else{
						$('.password-error').hide();
						$('#password').removeClass('error');
						$('#password').addClass('success');
					}
				});
			});
		</script>
</body>
</html>