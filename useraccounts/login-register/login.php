<?php

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		include'process-login.php';
		if($_POST['role'] == 'user'){
			header("Location: ../member/index-member.php");
		}
		else if($_POST['role'] == 'admin')
		header("Location: ../admin/index-admin.php");
	}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link
		rel = "stylesheet"
		href="https://use.fontawesom.com/releases/v5.8.1/css/all/css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
		crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="registration-styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Dental Clinic</title>
    </head>
	<body>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="process.php" method="post">
				<?php 
				if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
					?>
					<script>
						swal({
							title:"<?php echo $_SESSION['status']; ?>",
							text: "<?php echo $_SESSION['status_text']; ?>",
							icon: "<?php echo $_SESSION['status_code'];?>",
							button: "Ok",
						});
					</script>
				<?php
					unset($_SESSION['status']);
				}
				?>				
				
				<h1>Create Account</h1>
				<span>Fill up the form with correct values</span>
				<input type="text" id="firstname" name="firstname" placeholder="First Name" required/>
				<input type="text" id="lastname" name="lastname" placeholder="Last Name" required/>
				<input type="email" id="email" name="email" placeholder="Email" required/>
				<input type="password" id="password" name="password" placeholder="Password" required/> <br>
				<span>By creating an account you agree to our <br><a href="terms.html">Terms & Conditions</a></span> <br>
				<button name="create" type="submit" id ="register">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="process-login.php" method="post">
			<?php 
				if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
					?>
					<script>
						swal({
							title:"<?php echo $_SESSION['status']; ?>",
							text: "<?php echo $_SESSION['status_text']; ?>",
							icon: "<?php echo $_SESSION['status_code'];?>",
							button: "Ok",
						});
					</script>
				<?php
					unset($_SESSION['status']);
				}
				?>	
				<h1>Sign in</h1>
				<br>
				<input name="username" id="username" type="email" placeholder="Email" required />
				<input name="password2" id="password2" type="password" placeholder="Password" required />
				<label class="usertype-text">Select User Type:</label>
				<div class="selectdiv ">
				<label>
					<select name="role">
						<option selected value="user" name = "user">User</option>
						<option value="admin" name ="admin">Admin</option>
					</select>
				</label>
				</div>
				<a href="#">Forgot your password?</a>
				<button type ="submit" id="login">Sign In</button>
			</form>
		</div>


		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
				<img class = "logo-img" src = "images/logo-round.png" width="80" height="80" margin-top="-20"><br>
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
				<img src = "images/logo-round.png" width="80" height="80" margin-top="-20"><br>
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start your journey with us</p>
					<button class="ghost" id="signUp" >Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script src="login-script.js"></script>

	</body>
</html>