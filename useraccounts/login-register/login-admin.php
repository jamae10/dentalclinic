<?php

	session_start();
	if(isset($_SESSION['admin_login'])){
		header("Location: index.php");
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
        <link rel="stylesheet" href="admin-style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Dental Clinic</title>
    </head>

	<body>
  
	<p hidden><img class = "logo-image" src = "images/logo-round.png" width="105" height="105"><br></P>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<div class="container" id="container">
		<div class="form-container sign-up-container">
		</div>
		<div class="form-container sign-in-container">
			<form action="process-admin.php" method="post">
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

            <!-- SIGN IN SECTION -->
		
          
			<div class="random-box">
			</div>
		
				<h1>Sign in</h1>
                <img class = "logo-image2" src = "images/admin.png" width="120px">
				<br>
				<input name="username" id="username" type="email" placeholder="Email" required />
				<input name="password2" id="password2" type="password" placeholder="Password" required />	
                <a href="login.php" class ="user-link">Patient account? Log-in here</a>
				<button type ="submit" id="login">Sign In</button>
				<br>
				<div class = "hide">
				<p hidden><a href = "../index.php" class ="btn2">Homepage</a><p>
	</div>
			</form>
		</div>

		 <!-- END SIGN IN SECTION -->

	</body>
</html>