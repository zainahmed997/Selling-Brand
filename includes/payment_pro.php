<?php

    session_start();

    include ('connection.php');



    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postal = $_POST['postal'];

        $proImage = $_POST['pro_image'];
        $proName = $_POST['pro_name'];
        $proPrice = $_POST['pro_price'];
        $proSize = $_POST['pro_size'];
        $proQuantity = $_POST['pro_quantity'];
        $proSubtotal = $_POST['pro_subtotal'];
        $status = $_POST['status'];
        $proGTotal = $_POST['pro_gtotal'];

        $order_id = uniqid();


$i = 0; 
while($i<count($proName)) {
    
    $query = "INSERT INTO `orders`(`order_id`,`name`,`email`,`address`,`city`,`postal`,`pro_image`,`pro_name`,`pro_price`,`pro_size`,`pro_quantity`,`pro_subtotal`,`pro_gtotal`,`status`) VALUES('$order_id','$name','$email','$address','$city','$postal','$proImage[$i]','$proName[$i]','$proPrice[$i]','$proSize[$i]','$proQuantity[$i]','$proSubtotal[$i]','$proGTotal','$status')";
    
    $run = mysqli_query($conn,$query);
    $i++;
}
    if(!$run){

        echo "<script>alert('Something went wrong, please try later'); window.location.href='../payment.php'</script>";

    }

    else{

        unset($_SESSION['cart']);

        echo "<script>alert('Your Order has been placed'); window.location.href='../index.php'</script>";

}
}

?>