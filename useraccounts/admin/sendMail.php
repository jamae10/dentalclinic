<?php

session_start();
include "config.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

  $email = validate($_POST['recipient_name']);
  $text = validate($_POST['message_text']);

  $status = "Pending";
  

  $sql = "SELECT * FROM appointments WHERE email='$email' AND remarks = '$status'";
  $result = mysqli_query($conn, $sql);

  /*if(mysqli_num_rows($result) > 0){
    $_SESSION['status_sendMail'] = "Error";
    $_SESSION['status_text_sendMail'] = "Email not found in database";
    $_SESSION['status_code_sendMail'] = 'error';
    header('Location: manage.php');
  }*/
  //else{
    if($result){
    $row =mysqli_fetch_assoc($result);
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $type = $row['consultation_type'];
    $service = $row['service'];
    $date = $row['date'];
    $time = $row['time'];
    $concern = $row['concern'];
    $doctor = $row['doctor'];
    
    //$fullname = $firstname + " " + $lastname;

    $to = $email;
    $subject = 'Appointment Request - Castillo Dental Clinic';
    $headers = "From: " . $email . "\r\n";
    $headers .= "From: dentalclinic.castillo@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = '<html><body>';
    $message .= '<img src="https://i.ibb.co/SP1LvRr/CASTILLO-S.png" alt="Castillo Logo"/>';
    $message .= '<h1 style="color:black;">Appointment Received!</h1>';
    $message .= '<h3 style="color:black;">Thank you for patronizing our clinic! <br> Below are the details for your appointment.</h3>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $firstname .  " " . $lastname ."</td></tr>";
    $message .= "<tr><td><strong>Appointment Type:</strong> </td><td>" . $type . "</td></tr>";
    $message .= "<tr><td><strong>Service Required:</strong> </td><td>" . $service . "</td></tr>";
    $message .= "<tr><td><strong>Requested Date:</strong> </td><td>" . $date . "</td></tr>";
    $message .= "<tr><td><strong>Requested Time:</strong> </td><td>" . $time . "</td></tr>";
    $message .= "<tr><td><strong>Concern:</strong> </td><td>" . $concern . "</td></tr>";
    $message .= "<tr><td><strong>Requested Dentist:</strong> </td><td>" . $doctor . "</td></tr>";
    $message .= "<tr><td><strong>Consultation Link:</strong> </td><td>" . $text . "</td></tr>";
    $message .= "</table>";
    $message .= '</body></html>';
    
    $mail_sent = mail($to, $subject, $message, $headers);
        if($mail_sent){
            $_SESSION['status_sendMail'] = "Success";
            $_SESSION['status_text_sendMail'] = "Email Sent!";
            $_SESSION['status_code_sendMail'] = 'success';
            header('Location: manage.php');
        }
        else{
            $_SESSION['status_sendMail'] = "Error!";
            $_SESSION['status_text_sendMail'] = "Email Not Sent!";
            $_SESSION['status_code_sendMail'] = 'error';
            header('Location: manage.php');
        }
    }
  //}
  
?>