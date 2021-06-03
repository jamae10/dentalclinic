<?php
	include('config.php');
 
	$id=$_GET['id'];
 
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $type = $_POST['type'];
    $service = $_POST['service'];
    $concern = $_POST['concern'];
    $doctor = $_POST['doctor'];
    $status = $_POST['status'];
 
    $query = "UPDATE appointments SET firstname = '$firstname', lastname = '$lastname',email = '$email',gender = '$gender',consultation_type = '$type', service = '$service',date = '$date',time = '$time',concern = '$concern',doctor = '$doctor',remarks = '$status' 
    WHERE appointment_id ='$id'";
    $query2 = "UPDATE users SET firstname = '$firstname', lastname = '$lastname',email = '$email' where email = '$email' ";
    $query3 ="UPDATE user_clients SET firstname = '$firstname', lastname = '$lastname',email = '$email', gender = '$gender' where email = '$email'";
    $query_run = mysqli_query($conn,$query);
    $query_run2 = mysqli_query($conn,$query2);
    $query_run3 = mysqli_query($conn,$query3);

    if($query_run){
        $query_run2;
        $query_run2;
        header ("Location: manage.php");
    }

 
?>