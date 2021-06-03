<?php 
include('config.php');
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['appointment_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"SELECT * from appointments where appointment_id='".$row['appointment_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Are you sure to delete <strong><?php echo ucwords($drow['firstname'].' '.$row['lastname']); ?></strong> from the list? This method cannot be undone.</center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['appointment_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
 
            </div>
        </div>
    </div>
<!-- Delete modal -->
<!-- Edit  -->
<div class="modal fade" id="edit<?php echo $row['appointment_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <center>  <h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"SELECT * FROM appointments where appointment_id='".$row['appointment_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['appointment_id']; ?>">					
                <div class="modal-body row g-3">

                    <div class="col-md-12">
                    <label for="appointmentID" class="form-label">Appointment ID</label>
                    <input id = "appointmentID" name="appointmentID" type="text" class="form-control" placeholder="Appointment ID" aria-label="Appointment ID" value="<?php echo $erow['appointment_id']; ?>" disabled>
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
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select" value="<?php echo $erow['gender']; ?>">
                        <option value = "Male" <?php if($erow['gender']=="Male") echo 'selected="selected"';?>>Male</option>
                        <option value = "Female" <?php if($erow['gender']=="Female") echo 'selected="selected"';?>>Female</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                    <input id = "date" name="date" type="text" class="form-control" placeholder="Date" aria-label="Date" value="<?php echo $erow['date']; ?>">
                    </div>
                    <div class="col-md-4">
                    <label for="time" class="form-label">Session</label>
                    <select id="time" name="time" class="form-select" value="<?php echo $erow['time']; ?>">
                        <option value = "Morning" <?php if($erow['time']=="Morning") echo 'selected="selected"';?>>Morning</option>
                        <option value = "Afternoon" <?php if($erow['time']=="Afternoon") echo 'selected="selected"';?> >Afternoon</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                    <label for="type" class="form-label">Type</label>
                    <select id="type" name="type" class="form-select" value="<?php echo $erow['appointment_type']; ?>">
                        <option value = "Online" <?php if($erow['consultation_type']=="Online") echo 'selected="selected"';?>>Online</option>
                        <option value = "On-Site" <?php if($erow['consultation_type']=="On-Site") echo 'selected="selected"';?> >On-Site</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                    <label for="service" class="form-label">Service</label>
                    <select id="service" name="service" class="form-select" value="<?php echo $erow['service']; ?>">
                        <option value = "General Dentistry" <?php if($erow['service']=="General Dentistry") echo 'selected="selected"';?>>General Dentistry</option>
                        <option value = "Orthodontics" <?php if($erow['service']=="Orthodontics") echo 'selected="selected"';?> >Orthodontics</option>
                        <option value = "Cosmetic Dentistry" <?php if($erow['service']=="Cosmetic Dentistry") echo 'selected="selected"';?>>Cosmetic Dentistry</option>
                        <option value = "Dental Implant" <?php if($erow['service']=="Dental Implant") echo 'selected="selected"';?> >Dental Implant</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                    <input id = "concern" name="concern" type="text" class="form-control" placeholder="Concern" aria-label="Concern" value="<?php echo $erow['concern']; ?>">
                    </div>
                    <div class="col-md-6">
                    <label for="doctor" class="form-label">Doctor</label>
                    <select id="doctor" name="doctor" class="form-select" value="<?php echo $erow['doctor']; ?>">
                        <option value = "Doctor Strange" <?php if($erow['doctor']=="Doctor Strange") echo 'selected="selected"';?>>Doctor Strange</option>
                        <option value = "Doctor Stone" <?php if($erow['doctor']=="Doctor Stone") echo 'selected="selected"';?>>Doctor Stone</option>
                        <option value = "Doctor Pepper" <?php if($erow['doctor']=="Doctor Pepper") echo 'selected="selected"';?>>Doctor Pepper</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="status" class="form-select" value="<?php echo $erow['remarks']; ?>">
                        <option value = "Pending" <?php if($erow['remarks']=="Pending") echo 'selected="selected"';?>>Pending</option>
                        <option value = "Completed" <?php if($erow['remarks']=="Completed") echo 'selected="selected"';?>>Completed</option>
                        <option value = "Postponed" <?php if($erow['remarks']=="Postponed") echo 'selected="selected"';?>>Postponed</option>
                        <option value = "Cancelled" <?php if($erow['remarks']=="Cancelled") echo 'selected="selected"';?>>Cancelled</option>
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
    <!-- Edit  -->

