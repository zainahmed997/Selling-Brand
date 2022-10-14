<?php
    include("connection.php");
    error_reporting(0);

    if(isset($_POST['submit'])){
        $email = $_POST['email'];

        $query = "INSERT INTO `newsletter`(`email`) values('$email')";

        

        $dupEmail = mysqli_query($conn, "Select * FROM `newsletter` WHERE email = '$email'");
        if(mysqli_num_rows($dupEmail)){
            echo "<script>alert('You have already signup for newsletter with this email'); window.location.href='../index.php'</script>";
        }
        else{
            $run = mysqli_query($conn,$query);
            if($run){
                echo "<script>alert('Thanks for signing up! You will get offers on $email'); window.location.href='../index.php'</script>";
            }
            else{
                echo "<script>alert('Message not sent, we are facing some issues!');</script>";
            }
        }
        
    }
?>