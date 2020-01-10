<?php
    $hostname = 'localhost';
    $username = 'root';
    $password ='';
    $dbname = 'users';

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if (! $conn){  
        die('Could not connect: ' . mysqli_connect_error());  
      }  

?>