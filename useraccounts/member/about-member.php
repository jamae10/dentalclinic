<!-- About page for members -->
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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

<!-- MENU (logout button) -->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <p class="button-custom order-lg-last mb-0">
            <p class="button-custom order-lg-last mb-0">
			<a href="appointment.php"><button type="button" class ="btn btn-secondary"><i class="far fa-calendar-check"></i><span class="one"> Make an Appointment</span><span style="display:none" class="two"> Book</span></button></a>
        <a href="account.php"><button type="button" class ="btn btn-danger"><i class="fas fa-user"></i> <span class="one"> My</span> Account </button></a>
        <button type="button" class ="btn btn-danger2"><i class="fas fa-sign-out-alt"></i> Logout </button>
	      </p>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="index-member.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item active"><a href="about-member.php" class="nav-link">About Us</a></li>
	        	<li class="nav-item"><a href="services-member.php" class="nav-link">Services</a></li>
	          	<li class="nav-item"><a href="contact-member.php" class="nav-link">Contact</a></li>
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
            <h1 class="mb-2 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index-member.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!-- END BANNER -->

<!-- ABOUT CONTENT-->
<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(../images/dentist.jpg);">
					</div>
					<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	          	<div class="pl-md-5 ml-md-5">
		          	<span class="subheading">About Castillo Dental Clinic</span> <br>
		            <h2 class="mb-4" style="font-size: 28px;">Located at Pateros, Castillo Dental Clinic also provide quality dental care for our patients across Metro Manila.</h2>
	            </div>
	          </div>
	          <div class="pl-md-5 ml-md-5 mb-5">
							<p>Our clinic offers you numerous services and convenient access to our professional Dentists, and world-class dental health care. Experience high-end medical care only with Castillo Dental Clinic.</p>
							<div class="row mt-5 pt-2">
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>
										<div class="text">
											<h3>Our Dentists</h3>
											<p>Only the best dentists, to bring you the best care. We educate our patients about the importance of Dental health.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-dropper"></span></div>
										<div class="text">
											<h3>Emergency Cares</h3>
											<p>We are one phone call away for all dental emergencies, with our dentists ready to assist as soon as possible.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-experiment-results"></span></div>
										<div class="text">
											<h3>Outdoor Checkups</h3>
											<p>We ensure safe dental visits in our clinic, where we provide health protocols for all of our patients.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-heart-rate"></span></div>
										<div class="text">
											<h3>Online Consults</h3>
											<p>Experience 24 hours service from our team with our online consultations and convenient support system.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- END ABOUT CONTENT -->

<!-- CONSULTATION BUTTON-->
		<section class="ftco-intro" style="background-image: url(../images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>We Provide Online Consultations!</h2>
						<p class="mb-0">You will get a unique Zoom link for the video consult once you book an appointment.</p>
						<p></p>
					</div>
					<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0"><a href="appointment.php" class="btn btn-secondary px-4 py-3">Let's do it!</a></p>
					</div>
				</div>
			</div>
		</section>
<!-- END CONSULTATION BUTTON-->

<!-- TESTIMONY -->
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonials</span>
            <h2 class="mb-4">What our patients say about us.</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(../images/random-person.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Doctors take their time to talk to you and tried to get to the bottom of the issue. You will feel being cared of.</p>
                    <p class="name">Iris Ford</p>
                    <span class="position">Programmer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(../images/person_2.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Doctor was very friendly, accomodating and transparent. She wanted to know more about me and my condition rather than just give me a prescription. She took time to talk to me and help me.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(../images/person_3.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Dr. Castillo is very friendly and nice to speak with. She knew her craft very well. A perfect 5-star rating for the medical service received. Thank you!</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Student</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(../images/person_4.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>The convenience of online consultation,  I don't need to wait for the bus or get gas for your car. I simply go on the internet and begin my consultation. I can speak with highly trained medical professionals without needing to move from my seat.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Teacher</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(../images/person_1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>The instructions are clear and easy to follow. The attending doctor was very approachable and clear. Overall, it was a good experience and the consultation was very helpful.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- END TESTIMONY -->

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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

 
  </body>
</html>
