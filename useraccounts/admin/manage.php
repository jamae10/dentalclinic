<!-- Manage database for admin-->
<?php 
session_start();
include "config.php";

if(!isset($_SESSION['admin_login']) && empty($_SESSION['admin_login'])){
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="jquery.tabledit.min.js"></script>
    <!-- STYLES -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="../style/style.css" rel="stylesheet" type="text/css"/>
    <link href="../style/style2.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  
  <body>

<!-- HEADER -->
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
          <div class="col-lg-3 pr-4 align-items-center">
            <a class="navbar-brand" href="index-admin.php">Dr. Castillo <span><br>Dental Clinic</span></a>
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

       <!-- ADMIN BUTTONS -->
        
       <p class="button-custom order-lg-last mb-0">
	      <a href="manage.php"><button type="button" class ="btn btn-secondary"><i class="fas fa-tasks"></i> Manage Appointments </button></a>
        <a href="database.php"> <button type="button" class ="btn btn-danger"><i class="fas fa-user"></i>  Patient Records  </button></a>
        <button type="button" class ="btn btn-danger2"><i class="fas fa-sign-out-alt"></i> Logout </button>
	      </p>

        <!-- END ADMIN BUTTONS -->


        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="index-admin.php" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="about-admin.php" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="services-admin.php" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="faqs-admin.php" class="nav-link">FAQs</a></li>
            <!--<li class="nav-item active"><a href="contact-admin.php" class="nav-link">Contact</a></li>-->
          </ul>
        </div>
      </div>
    </nav>
<!-- END MENU -->

<!-- MODAL SEND EMAIL -->

<div class="modal fade" tabindex="-1" role="dialog" id="modalSendEmail">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="sendMail.php" method="POST">
      <?php 
				if(isset($_SESSION['status_sendMail']) && $_SESSION['status_sendMail'] !=''){
					?>
					<script>
						swal({
							title:"<?php echo $_SESSION['status_sendMail']; ?>",
							text: "<?php echo $_SESSION['status_text_sendMail']; ?>",
							icon: "<?php echo $_SESSION['status_code_sendMail'];?>",
							button: "Ok",
						});
					</script>
				<?php
					unset($_SESSION['status_sendMail']);
				}
				?>	
        <div class="modal-body">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient_name" name="recipient_name" required>
            <div class="invalid-feedback">
              Please enter the email address of recepient.
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message_text" name="message_text"required></textarea>
            <div class="invalid-feedback">
              Please enter a message.
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" id="btnSubmitEmail" name="submitMail" class="btn btn-primary">Send Email</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- END MODAL SEND EMAIL -->

<!-- BANNER -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Manage Appointments</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index-admin.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Manage Appointments <i class="ion-ios-arrow-forward"></i></span></p>
            <button type="button" id="btnSendEmail" class ="btn btn-success"><i class="fas fa-envelope"></i> Send Email </button>
            <button onclick="window.print()" class="btn btn-secondary" ><i class="fas fa-print"></i> Print</button>
          </div>
        </div>
      </div>
    </section>
<!-- END BANNER -->
<!-- TABLE TABS -->
<button class="tablink" onclick="openPage('Home', this, '#1c1d5c')" id="defaultOpen"><i class="far fa-clock"></i> Pending Appointments</button>
<button class="tablink" onclick="openPage('News', this, '#355f82')" ><i class="far fa-calendar-check"></i> Completed Appointments</button>
<button class="tablink" onclick="openPage('Contact', this, '#62a59e')"><i class="fas fa-hourglass-start"></i> Postponed Appointments</button>
<button class="tablink" onclick="openPage('About', this, '#84d0b8')"><i class="fas fa-phone-slash"></i> Cancelled Appointments</button>


<!-- Modal Form -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="modal fade" tabindex="-1" id="editmodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Information</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="updateCode.php" method="POST">
      <?php 
				if(isset($_SESSION['update_status']) && $_SESSION['update_status'] !=''){
					?>
					<script>
						swal({
							title:"<?php echo $_SESSION['update_status']; ?>",
							text: "<?php echo $_SESSION['update_status_text']; ?>",
							icon: "<?php echo $_SESSION['update_status_code'];?>",
							button: "Ok",
						});
					</script>
				<?php
					unset($_SESSION['update_status']);
				}
				?>				
      <div class="modal-body row g-3">

        <div class="col-md-12">
          <label for="appointmentID" class="form-label">Appointment ID</label>
          <input id = "appointmentID" name="appointmentID" type="text" class="form-control" placeholder="Appointment ID" aria-label="Appointment ID" disabled>
        </div>
        <div class="col-md-6">
          <input id = "firstname" name="firstname" type="text" class="form-control" placeholder="First name" aria-label="First name" >
        </div>
        <div class="col-md-6">
          <input type="text" id = "lastname" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col-8">
          <input id = "email" name="email" type ="email" class="form-control" placeholder="Email" aria-label="Email">
        </div>
        <div class="col-md-4">
          <label for="gender" class="form-label">Gender</label>
          <select id="gender" name="gender" class="form-select">
            <option selected>Choose...</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
        <div class="col-md-4">
        <input id = "date" name="date" type="text" class="form-control" placeholder="Date" aria-label="Date">
        </div>
        <div class="col-md-4">
        <input id = "time" name="time" type="text" class="form-control" placeholder="Time" aria-label="Time">
        </div>
        <div class="col-md-4">
        <label for="type" class="form-label">Type</label>
          <select id="type" name="type" class="form-select">
            <option selected>Choose...</option>
            <option>Online</option>
            <option>On-Site</option>
          </select>
        </div>
        <div class="col-md-6">
        <input id = "service" name="service" type="text" class="form-control" placeholder="Service" aria-label="Service">
        </div>
        <div class="col-md-6">
        <input id = "concern" name="concern" type="text" class="form-control" placeholder="Concern" aria-label="Concern">
        </div>
        <div class="col-md-6">
        <label for="doctor" class="form-label">Doctor</label>
          <select id="doctor" name="doctor" class="form-select">
            <option selected>Choose...</option>
            <option>Doctor Strange</option>
            <option>Doctor Stone</option>
            <option>Doctor Pepper</option>
          </select>
        </div>
        <div class="col-md-6">
        <label for="status" class="form-label">Status</label>
          <select id="status" name="status" class="form-select">
            <option selected>Choose...</option>
            <option>Pending</option>
            <option>Completed</option>
            <option>Postponed</option>
            <option>Cancelled</option>
          </select>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="updateData">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- End Modal Form -->

<!-- PENDING -->
<div id="Home" class="tabcontent">
<?php
  include "config.php";
  $remark = "Pending";
  $sql = "SELECT appointment_id,firstname, lastname, email, gender, consultation_type, service, date, time, concern, doctor, remarks
  FROM appointments WHERE remarks = '$remark'";
  $result = mysqli_query($conn, $sql);
  $num = 1;
?>

<table class="table table-hover table-responsive-md ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Appointment ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Type</th>
      <th scope="col">Service</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Concern</th>
      <th scope="col">Doctor</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <?php
    if($result){
      foreach($result as $row){
  ?>
  <tbody>
    <tr>
      <td><?php echo $num; $num++; ?></td>
      <td><?php echo $row['appointment_id'];  ?></td>
      <td><?php echo $row['firstname'];  ?></td>
      <td><?php echo $row['lastname'];?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['consultation_type']; ?></td>
      <td><?php echo $row['service']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['time']; ?></td>
      <td><?php echo $row['concern']; ?></td>
      <td><?php echo $row['doctor']; ?></td>
      <td><?php echo $row['remarks']; ?></td>
      <td>
        <button type="button" id= "editbtn" class="btn btn-success editbtn"  title="Edit" ><i class="fa fa-edit"></i></button>
        <button type="button" id= "deletebtn" class="btn btn-danger editbtn"  title="Delete" ><i class="fa fa-trash"></i></button>
      </td>
    </tr>
  </tbody>
  <?php    
      }
      }else{
        echo "No Results";
      }
    $conn->close(); 
  ?>
</table>
</div>

<!-- COMPLETED -->
<div id="News" class="tabcontent">
<?php
  include "config.php";
  $remark = "Completed";
  $sql = "SELECT firstname, lastname, email, gender, consultation_type, service, date, time, concern, doctor, remarks
  FROM appointments WHERE remarks = '$remark'";
  
  $result = mysqli_query($conn, $sql);
  
  $num = 1;
?>
<table class="table table-hover table-responsive-md  ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Type</th>
      <th scope="col">Service</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Concern</th>
      <th scope="col">Doctor</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
    if($result){
      $sql2 = "INSERT INTO patient_records (UUID, firstname, lastname, email, gender, concern, service, date, doctor)
      SELECT  UUID, firstname, lastname, email, gender, concern, service, date, doctor 
      FROM appointments a 
      WHERE a.UUID,a.firstname,a.lastname, a.email, a.concern, a.service, a.date, a.doctor NOT IN (SELECT UUID, firstname, lastname, email, concern, service, date, doctor FROM patient_records)";
      $result2 = mysqli_query($conn, $sql2);
      $result2;
      foreach($result as $row){
  ?>
  <tbody>
    <tr>
      <td><?php echo $num; $num++; ?></td>
      <td><?php echo $row['firstname'];  ?></td>
      <td><?php echo $row['lastname'];?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['consultation_type']; ?></td>
      <td><?php echo $row['service']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['time']; ?></td>
      <td><?php echo $row['concern']; ?></td>
      <td><?php echo $row['doctor']; ?></td>
      <td><?php echo $row['remarks']; ?></td>
      <td>
        <!--<a class="add" title="Add" data-toggle="tooltip"><i class="fa fa-user-plus"></i></a>-->
        <a href = "edit-action.php" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
        <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
  <?php    
      }
      }else{
        echo "No Results";
      }
    $conn->close(); 
  ?>
</table>
</div>

<!-- POSTPONED -->
<div id="Contact" class="tabcontent">
<?php
  include "config.php";
  $remark = "Postponed";
  $sql = "SELECT firstname, lastname, email, gender, consultation_type, service, date, time, concern, doctor, remarks
  FROM appointments WHERE remarks = '$remark'";
  $result = mysqli_query($conn, $sql);
  $num = 1;
?>
<table class="table table-hover table-responsive-md ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Type</th>
      <th scope="col">Service</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Concern</th>
      <th scope="col">Doctor</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
    if($result){
      foreach($result as $row){
  ?>
  <tbody>
    <tr>
      <td><?php echo $num; $num++; ?></td>
      <td><?php echo $row['firstname'];  ?></td>
      <td><?php echo $row['lastname'];?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['consultation_type']; ?></td>
      <td><?php echo $row['service']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['time']; ?></td>
      <td><?php echo $row['concern']; ?></td>
      <td><?php echo $row['doctor']; ?></td>
      <td><?php echo $row['remarks']; ?></td>
      <td>
        <!--<a class="add" title="Add" data-toggle="tooltip"><i class="fa fa-user-plus"></i></a>-->
        <a class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
        <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
  <?php    
      }
      }else{
        echo "No Results";
      }
    $conn->close(); 
  ?>
</table>
</div>


<!-- CANCELLED -->
<div id="About" class="tabcontent">
<?php
  include "config.php";
  $remark = "Cancelled";
  $sql = "SELECT firstname, lastname, email, gender, consultation_type, service, date, time, concern, doctor, remarks
  FROM appointments WHERE remarks = '$remark'";
  $result = mysqli_query($conn, $sql);
  $num = 1;
?>
<table class="table table-hover table-responsive-md ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Type</th>
      <th scope="col">Service</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Concern</th>
      <th scope="col">Doctor</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
    if($result){
      foreach($result as $row){
  ?>
  <tbody>
    <tr>
      <td><?php echo $num; $num++; ?></td>
      <td><?php echo $row['firstname'];  ?></td>
      <td><?php echo $row['lastname'];?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['consultation_type']; ?></td>
      <td><?php echo $row['service']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['time']; ?></td>
      <td><?php echo $row['concern']; ?></td>
      <td><?php echo $row['doctor']; ?></td>
      <td><?php echo $row['remarks']; ?></td>
      <td>
        <!--<a class="add" title="Add" data-toggle="tooltip"><i class="fa fa-user-plus"></i></a>-->
        <a class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
        <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
  <?php    
      }
      }else{
        echo "No Results";
      }
    $conn->close(); 
  ?>
</table>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
<!-- END TABLE TABS -->



<!-- BODY CONTENT -->

<div class="ex1">
    <!-- INSERT DATABASE TABLE HERE -->
</div>

<!-- END BODY CONTENT -->

<!-- END CONTACT INFO -->

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
                <li><a href="index-admin.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about-admin.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="services-admin.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="faqs-admin.php"><span class="ion-ios-arrow-round-forward mr-2"></span>FAQS</a></li>
                <!--<li><a href="contact-admin.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>-->
              </ul>
            </div>
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="services-admin.php"><span class="ion-ios-arrow-round-forward mr-2"></span>General Dentistry</a></li>
                <li><a href="services-admin.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Orthodontics</a></li>
                <li><a href="services-admin.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Cosmetics Dentistry</a></li>
                <li><a href="services-admin.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Dental Implant</a></li>
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

<!-- Are you sure to log out? -->

  <script>

document.querySelector('.btn-danger2').addEventListener('click', danger);

function danger() {
  swal(
    {
      title: "Are you sure to log out?",
      text: "We still have work to do!",
      icon: '../images/question-mark.png',
      imageSize: '100x100',
      buttons: ["Cancel", "Log out"],
})
.then((okay) => {
   if (okay) {
    window.location.href = "logout.php";
    }
    }
  );
}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  $('#editbtn').on('click', function(){
    $('#editmodal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();

    console.log(data);
    $('#appointmentID').val(data[1]);
    $('#firstname').val(data[2]);
    $('#lastname').val(data[3]);
    $('#email').val(data[4]);
    $('#gender').val(data[5]);
    $('#date').val(data[8]);
    $('#time').val(data[9]);
    $('#type').val(data[6]);
    $('#service').val(data[7]);
    $('#concern').val(data[10]);
    $('#doctor').val(data[11]);
    $('#status').val(data[12]);
  });
</script>

<script>
 $('#btnSendEmail').on('click', function(){
  $('#modalSendEmail').modal('show');

 });
</script>
  </body>
</html>
