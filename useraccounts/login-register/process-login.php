<?php
session_start();
include "config.php";

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$username = validate($_POST['username']);
$password = validate($_POST['password2']);
$role = validate($_POST['role']);

//$password = $password;

$sql = "SELECT users.UUID, users.firstname, users.lastname, users.email, users.password, users.role, user_clients.phone, user_clients.gender, user_clients.address
FROM users INNER JOIN user_clients ON users.email=user_clients.email WHERE users.email = '$username' AND users.password='$password'";
$sql2 = "SELECT * FROM users WHERE email='$username' AND password='$password'";
//$sql2 = "SELECT * FROM users_clients WHERE email='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
$num = mysqli_num_rows($result);

/*
if(mysqli_num_rows($result) === 1) {
    $row =mysqli_fetch_assoc($result);
    $username = $row['email'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $password = $row['password'];
    //$id = $row['id'];

    if($row['password'] === $password && $row['role'] == $role){
      switch($role){
        case "admin":
          $_SESSION['admin_login']=$username;
          $_SESSION['firstname']=$firstname;
          $_SESSION['lastname']=$lastname;
          $_SESSION['password']=$password;
          //$_SESSION['id']=$id;
          header('Location:../admin/index-admin.php');
          break;
        case "user":
          $_SESSION['userlogin']=$username;
          $_SESSION['firstname']=$firstname;
          $_SESSION['lastname']=$lastname;
          $_SESSION['password']=$password;
          $_SESSION['username']=$username;
          //$_SESSION['id']=$id;
          header('Location:../member/index-member.php');
          break;
      }
    }
    else{
      $_SESSION['status'] = "Error";
      $_SESSION['status_text'] = "Incorect Username or password 2";
      $_SESSION['status_code'] = 'error';
      header('Location: login.php');
      exit();
  }
}
else{
    $_SESSION['status'] = "Error";
    $_SESSION['status_text'] = "Incorect Username or password";
    $_SESSION['status_code'] = 'error';
    header('Location: login.php');
    exit();
}*/

if($result2 -> num_rows > 0){
  $row =mysqli_fetch_assoc($result2);
    $uuid = $row['UUID'];
    $username = $row['email'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $password = $row['password'];
    //$id = $row['id'];
    
    if($row['password'] === $password && $row['role'] == $role){
      switch($role){
        case "admin":
          $_SESSION['uuid'] = $uuid;
          $_SESSION['role'] = "admin";
          $_SESSION['admin_login']=$username;
          $_SESSION['firstname']=$firstname;
          $_SESSION['lastname']=$lastname;
          $_SESSION['password']=$password;
          //$_SESSION['id']=$id;
          header('Location: ../admin/index-admin.php');
          
          break;
        case "user":
          if($result){
            $row2 =mysqli_fetch_assoc($result);
            $phone = $row2['phone'];
            $gender = $row2['gender'];
            $address = $row2['address'];

            $_SESSION['uuid'] = $uuid;
            $_SESSION['role'] = "user";
            $_SESSION['userlogin']=$username;
            $_SESSION['email']=$username;
            $_SESSION['firstname']=$firstname;
            $_SESSION['lastname']=$lastname;
            $_SESSION['password']=$password;
            $_SESSION['username']=$username;
            //$_SESSION['id']=$id;
            $_SESSION['phone']=$phone;
            $_SESSION['gender']=$gender;
            $_SESSION['address']=$address;
          }
          
          header('Location:../member/index-member.php');
          break;
      }
    }
    else{
      $_SESSION['status'] = "Error";
      $_SESSION['status_text'] = "Incorect Username or password 2";
      $_SESSION['status_code'] = 'error';
      header('Location: login.php');
      exit();
  }
}
else{
  $_SESSION['status'] = "Error";
    $_SESSION['status_text'] = "Incorect Username or password";
    $_SESSION['status_code'] = 'error';
    header('Location: login.php');
    exit();
}
?>
