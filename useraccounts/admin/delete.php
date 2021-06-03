<?php
	include('config.php');
	$id=$_GET['id'];

    $query = "DELETE FROM appointments WHERE appointment_id='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        header('Location:manage.php');
    }
?>