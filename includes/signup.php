<?php

    session_start();

    include ("connection.php");

    //   error_reporting(0);

    if(isset($_POST['signup'])){

        $name = $_POST['name'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $cpassword = $_POST['cpassword'];



        if($password != $cpassword){

            $_SESSION['passError'] = "Passwords not matched!";

            echo "<script>
    let prev_loc = document.referrer;
    window.location.href= prev_loc;
    </script>";

        }

        else{

            $query = "INSERT INTO `users`(`name`,`email`,`password`,`confirm`) VALUES ('$name','$email','$password','$cpassword')";



            $dupEmail = mysqli_query($conn, "Select * FROM `users` WHERE email = '$email'");



            if(mysqli_num_rows($dupEmail)){

                $_SESSION['dupEmail'] = "You can not create more than 1 account with same email";

                echo "<script>
    let prev_loc = document.referrer;
    window.location.href= prev_loc;
    </script>";

            }

            else{

                $run = mysqli_query($conn,$query);

                if($run){

                    $_SESSION['signup'] = "Account Created Successfully!";

                    echo "<script>
    let prev_loc = document.referrer;
    window.location.href= prev_loc;
    </script>";

                }

                else{

                    echo "<script>alert('Sorry! We are facing some issues please signup later');</script>";             

                }

            }

        }

    }

    ?> 