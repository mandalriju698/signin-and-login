<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>create new account</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div><p>
	</p></div>
	<div class="signup-form"  >
		<form action="signup_user.php" method="post">
			<div class="form-header">
				<h2>sign up</h2>
				<p>complete the form and start chat with your friends.</p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="user_name" placeholder="Example: Riju Mandal" autocomplete="off" required>
				
			</div>
			<div class="form-group">
				<label>password</label>
				<input type="password" class="form-control" name="user_pass" placeholder="password" autocomplete="off" required>
				
			</div>
		

			<div class="form-group">
				<label>Email Address</label>
				<input type="email" class="form-control" name="user_email" placeholder="someone@gmail.com" autocomplete="off" required>
				
			</div>
			<div class="form-group">
				<label>Country</label>
				<select class="form-control" name="user_country" required>
					<option value="">-select a country-</option>
					<option>INDIA</option>
					<option>BANGLADESH</option>
					<option>PAKISTAN</option>
					<option>NEPAL</option>
					<option>AMERICA</option>
					<option>UK</option>
					<option>FRANCE</option>
					<option>SRILANKA</option>
					<option>ISRAIL</option>
					<option>OTHERS</option>
				</select>
				
			</div>
			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="user_gender" required>
					<option value="">-select a gender-</option>
					<option>male</option>
					<option>female</option>
					<option>others</option>
					
				</select>
				
			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of use</a> @amp; <a href="#">privacy policy</a></label>
				
			</div>
			
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">sign up</button>
				
			</div>
			
				

			
				
			</div>

			
		</form>
	</div>
		<div class="text-center small" style="color: #f8f9fa;">already have account?<a href="signin.php">signin here</a></div>
		
	


</body>
</html>