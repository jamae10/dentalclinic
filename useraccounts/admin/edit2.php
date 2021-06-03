<?php
	include('config.php');
 
	$id=$_GET['id'];
 
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $service = $_POST['service'];
    $concern = $_POST['concern'];
    $doctor = $_POST['doctor'];
    $diagnosis = $_POST['diagnosis'];
    $treatment = $_POST['treatment'];
 
    $query = "UPDATE patient_records SET firstname = '$firstname', lastname = '$lastname',email = '$email',gender = '$gender',
    service = '$service',date = '$date',concern = '$concern', doctor = '$doctor',diagnosis = '$diagnosis', treatment = '$treatment'
    WHERE UUID ='$id'";
    $query4 = "UPDATE appointments SET firstname = '$firstname', lastname = '$lastname',email = '$email',gender = '$gender',
    service = '$service',date = '$date',concern = '$concern', doctor = '$doctor'
    WHERE UUID ='$id'";
    $query2 = "UPDATE users SET firstname = '$firstname', lastname = '$lastname',email = '$email' WHERE email = '$email' ";
    $query3 ="UPDATE user_clients SET firstname = '$firstname', lastname = '$lastname',email = '$email', gender = '$gender' WHERE email = '$email'";
    $query_run = mysqli_query($conn,$query);
    $query_run2 = mysqli_query($conn,$query2);
    $query_run3 = mysqli_query($conn,$query3);
    $query_run4 = mysqli_query($conn,$query4);

    if($query_run){
        $query_run2;
        $query_run3;
        $query_run4;
        header ("Location: database.php");
    }

 
?>