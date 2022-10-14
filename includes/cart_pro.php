<?php
error_reporting(0);
            session_start();

            $image = $_POST['image'];

            $name = $_POST['name'];

            $price = $_POST['price'];

            $discount = $_POST['discount'];

            $size = $_POST['size'];

            $quantity = $_POST['quantity'];

            if(isset($_POST['submit'])){

                // $check_product = array_column($_SESSION['cart'],'name');

                // if(in_array($name, $check_product)){

                    

                //     echo "<script>alert('This item already added in cart');

                //             window.location.href = 'shop.php';</script>";

                // }

                // else{

                $_SESSION['cart'][] = array('image' => $image,

                                        'name' => $name,

                                        'price' => $price,

                                        'discount' => $discount,

                                        'size' => $size,

                                        'quantity' => $quantity);

                // print_r($_SESSION['cart']);

                header("location: ../cart.php");

                // }

                // }    

            }



            // FOR DELETING FROM CART

            if(isset($_POST['remove'])){

                foreach($_SESSION['cart'] as $key => $value){

                    if($value['name'] === $_POST['product']){

                        unset($_SESSION['cart'][$key] );

                        $_SESSION['cart'] = array_values($_SESSION['cart']);

                        // header("location: ../cart.php");
                        echo "<script>window.location.href='../cart.php';</script>";

                    }

                }

                

            }





            // FOR UPDATING CART

            if(isset($_POST['updated_quantity'])){
                foreach($_SESSION['cart'] as $key => $value){

                    if($value['name'] === $_POST['product']){
                        $_SESSION['cart'][$key]['quantity']=$_POST['updated_quantity'];
                        // print_r($_SESSION['cart']);
                        // header("location: ../cart.php");
                        // echo "<script>window.location.href='../cart.php'</script>";
                        echo "<script>
                        let prev_loc = document.referrer;
                        window.location.href= prev_loc;
                        </script>";

                    }

                }
            }

    ?>