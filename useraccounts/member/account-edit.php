<?php
session_start();
include "config.php";


if(isset($_POST['update'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
          }
        
        $firstname = validate($_POST['firstname']);
        $email = validate($_POST['email']);
        $phone = validate($_POST['phone']);
        $gender = validate($_POST['gender']);
        $address = validate($_POST['address']);

        //$sql2 = "SELECT * FROM user_clients WHERE email='$username'";
        //$result = mysqli_query($conn, $sql2);
        
        //alert - not working
        /*if((mysqli_num_rows($result) > 0){
          $_SESSION['status'] = "Error";
          $_SESSION['status_text'] = "The username is taken try another";
          $_SESSION['status_code'] = 'error';
          header('Location: account.php');
        } */

        $sql = "UPDATE user_clients SET firstname='$firstname', email='$email', phone='$phone', gender='$gender', address='$address' WHERE email = '$email'";
            $result2 = mysqli_query($conn, $sql);
            if($result2){
              $_SESSION['firstname']=$firstname;
              $_SESSION['username']=$email;
              $_SESSION['phone']=$phone;
              $_SESSION['gender']=$gender;
              $_SESSION['address']=$address;
              header('Location:account.php');
              exit();
            }
        
}
?>