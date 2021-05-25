<?php

session_start();
include "config.php";

if(isset($_POST)){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    
      $email = validate($_SESSION['userlogin']);
      $firstname = validate($_SESSION['firstname']);
      $lastname = validate($_SESSION['lastname']);
      $gender = validate($_SESSION['gender']);
      $fullname = validate($_POST['fullname']);
      $service = validate($_POST['service']);
      $date = validate($_POST['date']);
      $time = validate($_POST['time']);
      $concern = validate($_POST['concern']);
      $doctor = validate($_POST['doctor']);
      $remarks = 'PENDING';

    $sql = "INSERT INTO appointments(firstname,lastname, email, gender, service, date, time, concern, doctor, remarks)
    VALUES('$firstname', '$lastname', '$email', '$gender', '$service', '$date', '$time', '$concern', '$doctor', '$remarks', )";
    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['message'] =  "Done! Please wait for an email confirmation";
    }
    else{
        $_SESSION['message'] =  "You can still edit your input ";
    }
}
mysqli_close($conn);
 

?>