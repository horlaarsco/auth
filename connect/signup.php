<?php

require_once "connect.php";
if(isset($_SESSION['user_id'])!="") {
   header("Location: dashboard.php");
 }
 if (isset($_POST['signup'])) {


    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $cpassword =$_POST['cpassword']; 
    if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
    }       
    if($password != $cpassword) {
        $cpassword_error = "Password and Confirm Password doesn't match";
    }else{
        if(mysqli_query($conn, "INSERT INTO user(username, email ,password) VALUES('" . $username . "', '" . $email . "', '" . md5($password) . "')")) {
         header("location: login.php");
         exit();
        } else {
           echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
?>
