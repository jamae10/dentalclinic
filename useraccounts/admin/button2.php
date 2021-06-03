<?php 
include('config.php');
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['UUID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"SELECT * from patient_records where UUID='".$row['UUID']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Are you sure to delete <strong><?php echo ucwords($drow['firstname'].' '.$row['lastname']); ?></strong> from the list? This method cannot be undone.</center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete2.php?id=<?php echo $row['UUID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
 
            </div>
        </div>
    </div>
<!-- Delete modal -->
<!-- Edit  -->
<div class="modal fade" id="edit<?php echo $row['UUID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <center>  <h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"SELECT * FROM patient_records where UUID='".$row['UUID']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit2.php?id=<?php echo $erow['UUID']; ?>">					
                <div class="modal-body row g-3">

                    <div class="col-md-12">
                        <label for="patientId" class="form-label">Patient ID</label>
                        <input id = "patientId" name="patientId" type="text" class="form-control" placeholder="Patient ID" aria-label="Patient ID" value="<?php echo $erow['UUID']; ?>" disabled>
                    </div>
                    <div class="col-md-6">
                        <input id = "firstname" name="firstname" type="text" class="form-control" placeholder="First name" aria-label="First name"value="<?php echo $erow['firstname']; ?> ">
                    </div>
                    <div class="col-md-6">
                        <input type="text" id = "lastname" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name" value="<?php echo $erow['lastname']; ?>">
                    </div>
                    <div class="col-8">
                        <input id = "email" name="email" type ="email" class="form-control" placeholder="Email" aria-label="Email"value="<?php echo $erow['email']; ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="genderSelect" class="form-label">Gender</label>
                        <select id="genderSelect" name="gender" class="form-select" value="<?php echo $erow['gender']; ?>">
                            <option class="dropdown-item" value = "Male" <?php if($erow['gender']=="Male") echo 'selected="selected"';?>>Male</option>
                            <option class="dropdown-item" value = "Female" <?php if($erow['gender']=="Female") echo 'selected="selected"';?>>Female</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="service" class="form-label">Service</label>
                        <select id="service" name="service" class="form-select" value="<?php echo $erow['service']; ?>">
                            <option class="dropdown-item" value = "General Dentistry" <?php if($erow['service']=="General Dentistry") echo 'selected="selected"';?>>General Dentistry</option>
                            <option class="dropdown-item" value = "Orthodontics" <?php if($erow['service']=="Orthodontics") echo 'selected="selected"';?> >Orthodontics</option>
                            <option class="dropdown-item" value = "Cosmetic Dentistry" <?php if($erow['service']=="Cosmetic Dentistry") echo 'selected="selected"';?>>Cosmetic Dentistry</option>
                            <option class="dropdown-item" value = "Dental Implant" <?php if($erow['service']=="Dental Implant") echo 'selected="selected"';?> >Dental Implant</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input id = "concern" name="concern" type="text" class="form-control" placeholder="Concern" aria-label="Concern" value="<?php echo $erow['concern']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="doctor" class="form-label">Doctor</label>
                        <select id="doctor" name="doctor" class="form-select" value="<?php echo $erow['doctor']; ?>">
                            <option class="dropdown-item" value = "Doctor Strange" <?php if($erow['doctor']=="Doctor Strange") echo 'selected="selected"';?>>Doctor Strange</option>
                            <option class="dropdown-item" value = "Doctor Stone" <?php if($erow['doctor']=="Doctor Stone") echo 'selected="selected"';?>>Doctor Stone</option>
                            <option class="dropdown-item" value = "Doctor Pepper" <?php if($erow['doctor']=="Doctor Pepper") echo 'selected="selected"';?>>Doctor Pepper</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input id = "date" name="date" type="text" class="form-control" placeholder="Date" aria-label="Date" value="<?php echo $erow['date']; ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="diagnosis" class="form-label">Diagnosis</label>
                        <input class="form-control" id="diagnosis" name="diagnosis">
                    </div>
                    <div class="col-md-12">
                        <label for="treatment" class="form-label">Treatment</label>
                        <input class="form-control" id="treatment" name="treatment">
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
    <!-- Edit  -->

