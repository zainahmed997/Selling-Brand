<?php

    session_start();



    session_unset();



    $_SESSION['logoutSuccess'] = "Log out Successfully!";

    // header("location: ../index.php");
    echo "
    <script>
        let prev_loc = document.referrer;
        window.location.href= prev_loc;
    </script>";

?>