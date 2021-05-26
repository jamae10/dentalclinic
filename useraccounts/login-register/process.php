<?php

  session_start();
  include "config.php";

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
  $role = 'user';
  $phone = '00000000000';
  $gender = 'None';
  $address = 'None';

  //$a = uniqid('id',true);
  $a = md5(time() . mt_rand(1,1000000));

  $uuid = $a;
  //$user_data = 'firstname='. $firstname. '&email='. $email;

  //hashing the password
  //$password = $password;

  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
    $_SESSION['status'] = "Error";
    $_SESSION['status_text'] = "The username is taken try another";
    $_SESSION['status_code'] = 'error';
    header('Location: registration.php');
  }
  else{
    $sql2 = "INSERT INTO users(UUID, firstname, lastname, email, password, role) VALUES ('$uuid', '$firstname', '$lastname', '$email', '$password', '$role')";
    $sql3 = "INSERT INTO user_clients(UUID, firstname, lastname, email, password, phone, gender, address) VALUES ('$uuid', '$firstname', '$lastname', '$email', '$password', '$phone', '$gender', '$address')";
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);
    if($result2){
      $result3;
      $_SESSION['status'] = "Success!";
      $_SESSION['status_text'] = "Your account has been created successfully";
      $_SESSION['status_code'] = 'success';
      header('Location: registration.php');
      exit();
    }
    else{
      $_SESSION['status'] = "Error";
      $_SESSION['status_text'] = "Unknown error occured";
      $_SESSION['status_code'] = 'error';
      header('Location: registration.php');
      exit();
    }
  }

?> 