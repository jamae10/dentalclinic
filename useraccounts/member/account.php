<!-- Account page for members only -->
<?php
session_start();
include "config.php";
if(!isset($_SESSION['userlogin'])){
  header("Location: ../index.php");
}

if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION);
  header("Location: ../index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dr. Castillo Dental Clinic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    
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
    <link href="../style/style3.css" rel="stylesheet" type="text/css"/>
    
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

     <!-- BUTTONS -->
        
      <p class="button-custom order-lg-last mb-0">
      <a href="appointment.php"><button type="button" class ="btn btn-secondary"><i class="far fa-calendar-check"></i> Make an Appointment </button></a>
      <a href="account.php"><button type="button" class ="btn btn-danger"><i class="fas fa-user"></i> My Account </button></a>
      <button type="button" class ="btn btn-danger2"><i class="fas fa-sign-out-alt"></i> Logout </button>
      </p>

      <!-- END BUTTONS -->


        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="index-member.php" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="about-member.php" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="services-member.php" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="faqs-member.php" class="nav-link">FAQs</a></li>
            <li class="nav-item active"><a href="contact-member.php" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- END MENU -->

<!-- BANNER -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Hello, <?php echo $_SESSION['firstname'];?>!</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index-member.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!-- END BANNER -->

<!-- PROFILE BODY -->

<div class="ex1">
   
<body><div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-9 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600"><?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?></h6>
                                <p>Patient</p> 
                                  
                                <!-- EDIT PROFILE BUTTON -->
                              <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  
                              <div id="login" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                              <div class="modal-content">
                              <div class="modal-body">
                              <button data-dismiss="modal" class="close">&times;</button>
                              <h4>Edit Profile</h4>
                              <form action = "account-edit.php" method="post">
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
                                <input type="text" name="firstname" class="username form-control" placeholder=" Username"/>
                                <input type="text" name="email" class="password form-control" placeholder=" Email"/>
                                <input type="text" name="phone" class="username form-control" placeholder=" Phone"/>
                                <input type="text" name="gender" class="username form-control" placeholder=" Gender"/>
                                <input type="text" name="address" class="username form-control" placeholder=" Address"/>
                                <input class="btn login" name="update" type="submit" value="Done" />
                              </form>
                              </div>
                              </div>
                              </div>  
                              </div>                  

                               <!-- END PROFILE EDIT BUTTON -->

                               <!-- ICON ACCOUNT BUTTONS -->

                               <a class="login-trigger" href="#" data-target="#login" data-toggle="modal"><button class="button button1"><i class="far fa-edit"></i></button></a>  
                               <a href="appointment.php"> <button class="button button2"><i class="far fa-calendar-plus"></i></button> </a>
                                <button class="button button3"><i class="fas fa-sign-out-alt"></i></button>

                               <!-- END ICON ACCOUNT BUTTONS -->

                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?php echo $_SESSION['username'];?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"><?php echo $_SESSION['phone'];?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Gender</p>
                                        <h6 class="text-muted f-w-400"><?php echo $_SESSION['gender'];?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Address</p>
                                        <h6 class="text-muted f-w-400"><?php echo $_SESSION['address'];?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Appointment History</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Date</p>
                                        <h6 class="text-muted f-w-400">05-18-2021</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Service</p>
                                        <h6 class="text-muted f-w-400">Check Up</h6>
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>

</html>
<!-- FOOTER -->
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">

          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">Dr. Castillo <span>Dental Clinic</span></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">#81 (Commercial) M. Almeda Street Pateros, Metro Manila</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">(02) 642-8175 / 642-1436</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">drcastilloDC@gmail.com</span></a></li>
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
                <li><a href="faqs-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>FAQS</a></li>
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
              <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
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
    window.location.href = "../index.php";
    <?php
     session_destroy();
     unset($_SESSION);
     //header("Location: ../index.php");
    ?>
    
    
    }
    }
  );
}
</script>

<script>

</script>
  </body>
</html>