<?php
include '../includes/connection.php';
session_start();

$adminName = $_POST['name'];
$adminPassword = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM `admin` WHERE name='$adminName' AND password='$adminPassword'");

if(mysqli_num_rows($result)){
    
    $_SESSION['admin'] = $adminName;
    echo "<script>alert('Login Successfully'); window.location.href= '../index.php'</script> ";
    // header("location:../index.php;")
}
else{
    echo"<script>alert('Username or Password Incorrect'); window.location.href= 'login.php'</script>";
}

?>