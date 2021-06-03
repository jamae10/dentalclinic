<?php
	include('config.php');
	$id=$_GET['id'];

    $query = "DELETE FROM patient_records WHERE UUID='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        header('Location:database.php');
    }
?>