<?php

session_start();
include "config.php";

if(isset($_POST['updateData'])){
    
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
    $appointmentID = $_POST['appointmentID'];

    $query = "UPDATE appointments SET firstname = '$firstname', lastname = '$lastname',email = '$email',gender = '$gender',consultation_type = '$type', service = '$service',date = '$date',time = '$time',concern = '$concern',doctor = '$doctor',remarks = '$status' 
    WHERE appointment_id ='$appointmentID'";
    $query2 = "UPDATE users SET firstname = '$firstname', lastname = '$lastname',email = '$email' where email = '$email' ";
    $query3 ="UPDATE user_clients SET firstname = '$firstname', lastname = '$lastname',email = '$email', gender = '$gender' where email = '$email'";
    $query_run = mysqli_query($conn,$query);
    $query_run2 = mysqli_query($conn,$query2);
    $query_run3 = mysqli_query($conn,$query3);

    if($query_run){
        $query_run2;
        $query_run3;
        $_SESSION['update_status'] = "Success!";
        $_SESSION['update_status_text'] = "Data Updated!";
        $_SESSION['update_status_code'] = 'success';
        header ("Location: manage.php");
    }
    else{
        $_SESSION['update_status'] = "Error!";
        $_SESSION['update_status_text'] = "Data Not Updated!";
        $_SESSION['update_status_code'] = 'error';
    }
}

?>