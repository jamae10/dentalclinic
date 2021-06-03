<!-- Appointment page for members-only -->
<?php 
ini_set('display_errors','1');
session_start();

include "config.php";

if(!isset($_SESSION['userlogin']) && empty($_SESSION['userlogin'])){
  header ("Location: ../index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dr. Castillo Dental Clinic</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <!-- STYLES -->
   
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">

    <link href="../style/style.css" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="../appointment/css/bootstrap.min.css" />
	  <link type="text/css" rel="stylesheet" href="../style/book-style.css" />

  </head>

  <body>

<!-- HEADER -->
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
          <div class="col-lg-3 pr-4 align-items-center">
            <a class="navbar-brand" href="index-member.php">Dr. Castillo <span><br>Dental Clinic</span></a>
          </div>
          <div class="col-lg-9 d-none d-md-block">
            <div class="row d-flex">
              <div class="col-md-4 pr-3 d-flex topper align-items-center">
                <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                <span class="text">Address: #81 (Commercial) M. Almeda Street Pateros, Metro Manila</span>
              </div>
              <div class="col-md pr-3 d-flex topper align-items-center">
                <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">Email: drcastilloDC@gmail.com</span>
              </div>
              <div class="col-md pr-3 d-flex topper align-items-center">
                <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">Phone: (02) 642-8175 / 642-1436</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
<!-- END HEADER -->

<!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <p class="button-custom order-lg-last mb-0">
      
      <!-- BUTTONS -->
      <p class="button-custom order-lg-last mb-0">
        <a href="appointment.php"><button type="button" class ="btn btn-secondary"><i class="far fa-calendar-check"></i><span class="one"> Make an Appointment</span><span style="display:none" class="two"> Book</span></button></a>
        <a href="account.php"><button type="button" class ="btn btn-danger"><i class="fas fa-user"></i> <span class="one"> My</span> Account </button></a>
        <button type="button" class ="btn btn-danger2"><i class="fas fa-sign-out-alt"></i> Logout </button>
	      </p>
        <!-- END BUTTONS -->

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="index-member.php" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="about-member.php" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="services-member.php" class="nav-link">Services</a></li>
            <li class="nav-item active"><a href="contact-member.php" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- END MENU -->

<!-- BANNER -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/banner-2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Book an Appointment</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index-member.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!-- END BANNER -->

<!-- APPOINTMENT SECTION -->

<body>
<div class="ex2">
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
         
							<h1>Book your appointment today</h1>
							<p> We create the best ways to treat our patients amidst the pandemic. We ensure safe visits with on-site appointments,
              and provide unique Zoom links for online consultations.</p>
						</div>
					</div>
          
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form  role = "form" method="post">
								<div class="form-group">
									<div class="form-checkbox">
									<label for="roundtrip">
											<input name="appointment_type" value="Online" type="radio"  id="roundtrip" name="flight-type">
											<span></span>Online Appointment
										</label>
										<label for="one-way">
											<input name="appointment_type" value="On-Site" id="one-way" type="radio" name="flight-type">
											<span></span>On-Site Appointment
										</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Patient's Name</span>
											<input name = "fullname"  id="fullname" class="form-control" type="text" placeholder="Full Name" value="<?php echo ucfirst($_SESSION['firstname'])?? "";?> <?php echo ucfirst($_SESSION['lastname'])?? "";?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Service Required</span>
											<select name = "service" id="service" class="form-control">
												<option name="service1">General Dentistry</option>
												<option name="service2">Orthodontics</option>
												<option name="service3">Cosmetic Dentistry</option>
                        <option name="service4">Dental Implant</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Preferred Date</span>
											<input name = "date"  id="date" class="form-control" type="date" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                    <span class="form-label">Preferred Session</span>
											<select name = "time" id="time" class="form-control">
												<option name="time1">Morning</option>
												<option name="time2">Afternoon</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
                    <span class="form-label">Concern</span>
											<input name= "concern" id="concern"  class="form-control" type="text" placeholder="What is your concern?" >
											<span class="select-arrow"></span>
										</div>
									</div>
								
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Doctor</span>
											<select name = "doctor" id="doctor" class="form-control">
												<option name="doctor1">Doctor Stone</option>
												<option name="doctor2">Doctor Strange</option>
												<option name="doctor3">Doctor Pepper</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
								<button id="btn-submit" type="button" class ="submit-btn">Request Appointment</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>

<!-- END APPOINTMENT SECTION -->
<!-- FOOTER -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">

          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">Dr. Castillo <span>Dental Clinic</span></h2>
              <p>Our technology offers you a convenient access to a Dentist, and world-class data security. Experience high-end medical care only with Castillo Dental Clinic.</p>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">#81 (Commercial) M. Almeda Street Pateros, Metro Manila</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(02) 642-8175 / 642-1436</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">dentalclinic.castillo@gmail.com</span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="contact-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>General Dentistry</a></li>
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Orthodontics</a></li>
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Cosmetics Dentistry</a></li>
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Dental Implant</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
          	<div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Opening Hours</h2>
              <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>24/7 (Online Consultation)</h3>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>9:00 AM - 12:00 PM (Appointment)</h3>
              <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>9:00 AM - 1:00 PM (X-ray Services)</h3>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">BCSAD</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
<!-- END FOOTER -->



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
<!-- REVIEW DETAILS PROMPT -->
<script src="../sweetalert/jquery-3.6.0.min.js"></script>
<script src="../sweetalert2.all.min.js"></script>
  <script src="../sweetalert/sweetalert.js"></script>
  <script src="../sweetalert/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Request Appointment Modal - TESTING  -->
<!--<script>
  $('#btn-submit').on('click', function(e){

    swal({
      title: 'Review Details:',
      text: "You won't be able to revert this!",
      icon: '../images/dentist-icon.png',
      //showCancelButton: true,
      buttons: ["Oh noez!", "Aww yiss!"],
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        swal("Good job!", "You clicked the button!", "success");
      }
    })
  });
  </script>-->
<!-- Request Appointment Modal - TESTING - End  -->


<!-- Request Appointment Modal -->
<script>
  $('#btn-submit').on('click',function(e) { 
    e.preventDefault(); 
    var ele = document.getElementsByName('appointment_type');
    var type;            
            for(i = 0; i < ele.length; i++) {
                if(ele[i].checked)
               type = ele[i].value;
            }
    var fullname = $('#fullname').val();
    var service = $('#service').val();
    var date = $('#date').val();
    var time = $('#time').val();
    var concern = $('#concern').val();
    var doctor = $('#doctor').val();

    swal({
      title: "Review Details:",
      text: "Patient's Name: \t\t" + fullname +"\nService: \t\t" + service +"\nPreffered Date: \t\t"+ date+ "\nPreffered Time: \t\t" + time + "\nType: \t\t"+ type+ "\nConcern: \t\t"+ concern+"\nDoctor: \t\t" +doctor,
      icon: 'dentist-icon.png',
      buttons: ["Cancel", "Submit"],
      dangerMode: false,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          type: "POST",
          url: "process-appointment.php",
          data: { 
            'fullname': fullname, 
            'service': service, 
            'date': date, 
            'time': time, 
            'concern': concern, 
            'doctor': doctor, 
            'type': type },
          cache: false,
        });

        <?php if(isset($_SESSION['success']) && $_SESSION['success'] !=''){ ?>
          swal("Success!", "Done! Please wait for an email confirmation", "success");
          <?php unset($_SESSION['fail']);

      } else if(isset($_SESSION['fail']) && $_SESSION['fail'] !=''){ ?>
          swal("Failed!", "Email not sent. Please try again", "error");
        <?php unset($_SESSION['success']);

      } else if(isset($_SESSION['error']) && $_SESSION['error'] !=''){ ?>
          swal("Error!", "Oops, your request was not saved.", "error");
       <?php unset($_SESSION['error']);

      } else if(isset($_SESSION['error_duplicate']) && $_SESSION['error_duplicate'] !=''){ ?>
        swal("Error!", "Appointment Duplication", "error");
      <?php unset($_SESSION['error_duplicate']);
      } ?>
      } 
      else {
        swal("You can still edit your input!");
      }
    });
  });

</script> 
<!-- Request Appointment Modal End -->

<!-- Are you sure to log  out? -->

  <script>

document.querySelector('.btn-danger2').addEventListener('click', danger);

function danger() {
  swal(
    {
      title: "Are you sure to log out?",
      text: "We still have many services to offer!",
      icon: '../images/question-mark.png',
      imageSize: '100x100',
      buttons: ["Cancel", "Log out"],
})
.then((okay) => {
   if (okay) {
    window.location.href = "logout.php";}
    }
  );
}
</script>

<!-- END REVIEW DETAILS PROMPT -->

  </body>
</html>
<?php 


//}// else header ("Location: ../index.php") ?>