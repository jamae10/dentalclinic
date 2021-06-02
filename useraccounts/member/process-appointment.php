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
      $remarks = "Pending";
      $apptID= time().'-'.mt_rand();

    $sql2 = "SELECT * FROM appointments WHERE UUID = '$uuid' AND service = '$service' AND date = '$date' AND time = '$time' AND concern = '$concern' AND doctor = '$doctor' AND consultation_type = '$type' ";
    $sql = "INSERT INTO appointments(UUID,appointment_id, firstname, lastname, email, gender,  consultation_type, service, date, time, concern, doctor, remarks)
    VALUES('$uuid','$apptID', '$firstname', '$lastname', '$email', '$gender','$type', '$service', '$date', '$time', '$concern', '$doctor', '$remarks' )";
    //$sql = "INSERT INTO appointments (UUID,appointment_id, firstname, lastname, email, gender,  consultation_type, service, date, time, concern, doctor, remarks)
    //VALUES('$uuid','$apptID', '$firstname', '$lastname', '$email', '$gender','$type', '$service', '$date', '$time', '$concern', '$doctor', '$remarks' )
    //WHERE NOT IN (SELECT consultation_type, service, date, time, concern, doctor FROM appointments WHERE UUID = '$uuid')";
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    
    /*if(mysqli_num_rows($result2) > 0){
        $_SESSION['status'] = "Error";
        $_SESSION['status_text'] = "Appointment Duplication";
        $_SESSION['status_code'] = 'error';
        $_SESSION['error_duplicate'] =  'Error!';
        header('Location: appointment.php');
    } */
    //else{
        if($result){
            //send email
            //$result;
            $to = $_SESSION['email'];
            $subject = 'Appointment Request - Castillo Dental Clinic';
            $headers = "From: " . strip_tags($_SESSION['email']) . "\r\n";
            $headers .= "From: dentalclinic.castillo@gmail.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
            $message = '<html><body>';
            $message .= '<img src="https://i.ibb.co/SP1LvRr/CASTILLO-S.png" alt="Castillo Logo"/>';
            $message .= '<h1 style="color:black;">Appointment Received!</h1>';
            $message .= '<h3 style="color:black;">Thank you for patronizing our clinic! <br> Below are the details for your appointment.</h3>';
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['fullname']) . "</td></tr>";
            $message .= "<tr><td><strong>Appointment Type:</strong> </td><td>" . strip_tags($_POST['type']) . "</td></tr>";
            $message .= "<tr><td><strong>Service Required:</strong> </td><td>" . strip_tags($_POST['service']) . "</td></tr>";
            $message .= "<tr><td><strong>Requested Date:</strong> </td><td>" . strip_tags($_POST['date']) . "</td></tr>";
            $message .= "<tr><td><strong>Requested Time:</strong> </td><td>" . strip_tags($_POST['time']) . "</td></tr>";
            $message .= "<tr><td><strong>Concern:</strong> </td><td>" . strip_tags($_POST['concern']) . "</td></tr>";
            $message .= "<tr><td><strong>Requested Dentist:</strong> </td><td>" . strip_tags($_POST['doctor']) . "</td></tr>";
            $message .= "</table>";
            $message .= '</body></html>';
            
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
   // }
    
   
mysqli_close($conn);
 

?>