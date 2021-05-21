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

$password = $password;

$sql = "SELECT * FROM users WHERE email='$username' AND password='$password'";
$sql2 = "SELECT * FROM users_clients WHERE email='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
$num = mysqli_num_rows($result);

if(mysqli_num_rows($result) === 1) {
    $row =mysqli_fetch_assoc($result);
    $username = $row['email'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $password = $row['password'];
    $id = $row['id'];
    if($row['password'] === $password && $row['role'] == $role){
      switch($role){
        case "admin":
          $_SESSION['admin_login']=$email;
          $_SESSION['firstname']=$firstname;
          $_SESSION['lastname']=$lastname;
          $_SESSION['password']=$password;
          $_SESSION['id']=$id;
          header('Location:../admin/index-admin.php');
          break;
        case "user":
          $_SESSION['userlogin']=$email;
          $_SESSION['firstname']=$firstname;
          $_SESSION['lastname']=$lastname;
          $_SESSION['password']=$password;
          $_SESSION['username']=$username;
          $_SESSION['id']=$id;
          header('Location:../member/index-member.php');
          break;
      }
    }
    else{
      $_SESSION['status'] = "Error";
      $_SESSION['status_text'] = "Incorect Username or password";
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
