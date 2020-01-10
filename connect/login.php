<?php
session_start();
 
require_once "connect.php";
 
if(isset($_SESSION['user_id'])!="") {
    header("Location: dashboard.php");
}
 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
    }  else{$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '" . $email. "' and password = '" . md5($password). "'");
   if(!empty($result)){
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['user_email'] = $row['email'];
            header("Location: dashboard.php");
        } 
    }else {
        $error_message = "Incorrect Email or Password!!!";
    }
}
}
?>

