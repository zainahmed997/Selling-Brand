<?php

    include 'connection.php';



    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $image = $_FILES['image'];
        $image_loc = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_des = "upload-image/".$image_name;
        $category = $_POST['category'];
        $sub_category = $_POST['sub-category'];

        move_uploaded_file($image_loc, "../upload-image/".$image_name);

        $query = mysqli_query($conn, "INSERT INTO `add_product`(`name`,`price`,`discount`,`image`,`category`,`sub_category`) VALUES('$name','$price','$discount','$image_des','$category','$sub_category')");

        if($query){
            header("location:../product.php");
        }
        else{
            echo "<script>alert('sorry');</script>";
        }
    }


    if(isset($_POST['delete'])){
        $rowId = $_POST['rowId'];
        $deleting = mysqli_query($conn, "DELETE FROM `add_product` WHERE id = $rowId");
        if($deleting){
            header("location:../product.php");
        }
        else{
            echo "error";
        }
    }
?>