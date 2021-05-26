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
        $lastname = validate($_POST['lastname']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
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

        $sql = "UPDATE user_clients SET firstname='$firstname', lastname='$lastname', email='$email', password='$password', phone='$phone', gender='$gender', address='$address' WHERE email = '$email'";
        $sql2 = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', password='$password' WHERE email = '$email'";
        $sql3 = "UPDATE appointments SET firstname='$firstname', lastname='$lastname', email='$email', gender='$gender' WHERE email = '$email'"; 
        $sql4 = "UPDATE patient_records SET firstname='$firstname', lastname='$lastname', email='$email', gender='$gender' WHERE email = '$email'";
        $result =  mysqli_query($conn, $sql2);
        $result2 = mysqli_query($conn, $sql);
        $result3 = mysqli_query($conn, $sql3);
        $result4 = mysqli_query($conn, $sql4);
            /*if($conn->query($sql)===TRUE){
              $result;
              $_SESSION['userlogin'] =$email;
              $_SESSION['firstname']=$firstname;
              $_SESSION['lastname']=$lastname;
              $_SESSION['username']=$email;
              $_SESSION['phone']=$phone;
              $_SESSION['gender']=$gender;
              $_SESSION['address']=$address;
              header('Location:account.php');
              exit();
            } */

            if ($result2){
              $result;
              $result3;
              $result4;
              $_SESSION['userlogin'] =$email;
              $_SESSION['email'] =$email;
              $_SESSION['firstname']=$firstname;
              $_SESSION['lastname']=$lastname;
              $_SESSION['username']=$email;
              $_SESSION['phone']=$phone;
              $_SESSION['gender']=$gender;
              $_SESSION['address']=$address;
              header('Location:account.php');
              exit();
            }
        
}
?>