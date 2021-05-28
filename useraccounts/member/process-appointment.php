<?php

session_start();
include "config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $uuid = validate($_SESSION['uuid']);
      $email = validate($_SESSION['email']);
      $firstname = validate($_SESSION['firstname']);
      $lastname = validate($_SESSION['lastname']);
      $gender = validate($_SESSION['gender']);
      $fullname = validate($_POST['fullname']);
      $service = validate($_POST['service']);
      $date = validate($_POST['date']);
      $time = validate($_POST['time']);
      $concern = validate($_POST['concern']);
      $doctor = validate($_POST['doctor']);
      $type = validate($_POST['type']);
      $remarks = "pending";

    $sql = "INSERT INTO appointments(UUID, firstname, lastname, email, gender,  consultation_type, service, date, time, concern, doctor, remarks)
    VALUES('$uuid', '$firstname', '$lastname', '$email', '$gender','$type', '$service', '$date', '$time', '$concern', '$doctor', '$remarks' )";
    $result = mysqli_query($conn, $sql);
    
    if($result){
       

        //send email
        $to = $_SESSION['email'];
        $subject = 'Appointment Request - Castillo Dental Clinic';
        $headers = "From: dentalclinic.castillo@gmail.com";
        $message = "Hello World\n First Mail";
        $mail_sent = mail($to, $subject, $message, $headers);
            if($mail_sent){
                $_SESSION['success'] =  'Success!';

            }
            else{
                $_SESSION['fail'] =  'Failed!';
            }
    }
    else{
        $_SESSION['error'] =  'Error!';
    }

mysqli_close($conn);
 

?>