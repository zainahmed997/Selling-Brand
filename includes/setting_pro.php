<?php
session_start();
    include 'connection.php';
    if(isset($_POST['update'])){
        $previous = $_POST['previous'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $updating = mysqli_query($conn, "UPDATE `users` SET `name` = '$name', `email` = '$email', `password`='$password' WHERE `name` = '$previous'");

        if($updating){
            echo "<script>alert('Your Account has been Updated!'); window.location.href='../index.php'</script>";
            unset($_SESSION["profile"]);
            $_SESSION["profile"] = $name;
        }
        else{
            echo "<script>alert('Sorry, Cant update your account'); window.location.href='../index.php'</script>";
        }
    }

?>