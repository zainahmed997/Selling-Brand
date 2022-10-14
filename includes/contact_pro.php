<?php
    include("connection.php");
    error_reporting(0);

    if(isset($_POST['submit-btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO `contact`(`name`,`email`,`message`) values('$name','$email','$message')";

        $run = mysqli_query($conn,$query);

        if($run){
            echo "<script>alert('Your message has been sent!'); window.location.href='../contact.php'</script>";
        }
        else{
            echo "<script>alert('Message not sent, we are facing some issues!');</script>";
        }
    }
?>