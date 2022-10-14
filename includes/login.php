<?php

    session_start();

    include ("connection.php");

    //   error_reporting(0);

    $email = $_POST['email'];

    $password = $_POST['password'];



    $result = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'");



    if(mysqli_num_rows($result)){





        $userData = "SELECT * FROM `users` WHERE email = '$email'";

        $nameQuery = mysqli_query($conn, $userData);



        while($row = mysqli_fetch_array($nameQuery)){

            $name = $row['name'];

        }

        $_SESSION['profile'] = $name;







        $_SESSION['loginSuccess'] = "Logged in Successfully!";

        // header("Location: ../index.php");
        echo "<script>
    let prev_loc = document.referrer;
    window.location.href= prev_loc;
    </script>";

    }

    else{

        $_SESSION['incorrect'] = "Incorrect Email or Password!";

        echo "<script>
    let prev_loc = document.referrer;
    window.location.href= prev_loc;
    </script>";

    }

    ?> 