<?php

    include("connection.php");

    error_reporting(0);



    if(isset($_POST['submit'])){

        $type = $_POST['type'];

        $name = $_POST['name'];

        $email = $_POST['email'];

        $feedback = $_POST['feedback'];



        $query = "INSERT INTO `feedback`(`type`,`name`,`email`,`feedback`) values('$type','$name','$email','$feedback')";



        $run = mysqli_query($conn,$query);



        if($run){

            echo "<script>alert('Your feedback has been sent!'); window.location.href='../feedback.php'</script>";

        }

        else{

            echo "<script>alert('Feedback not sent, we are facing some issues!');</script>";

        }

    }

?>