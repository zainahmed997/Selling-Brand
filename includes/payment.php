<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BTrend - Checkout</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">

    <link rel="icon" type="image/jpg" href="../img/favicon.jpg">

</head>

<body>

    <div class="pay-container">

        <form action="payment_pro.php" method="POST" spellcheck="false">

            <div class="pay-row">

                <div class="pay-col">

                    <h3 class="title">Billing Address</h3>

                    <div class="inputBox">

                        <span>Full Name :</span>

                        <input type="text" placeholder="Enter your full name" name="name" autocomplete="off" required>

                    </div>

                    <div class="inputBox">

                        <span>Email :</span>

                        <input type="email" placeholder="Enter your email" name="email" autocomplete="off" required>

                    </div>

                    <div class="inputBox">

                        <span>Address :</span>

                        <!-- <input type="text" placeholder="Enter your address" name="address" autocomplete="off" required> -->
                        <textarea name="address" id="" cols="50" rows="7" placeholder="Enter your address" required></textarea>

                    </div>


                    <div class="flex">

                        <div class="inputBox">

                            <span>City :</span>

                            <Select style="outline:none;" name="city" required>

                            <option value="">Select City</option>

                            <option value="Karachi">Karachi</option>

                            <option value="Lahore">Lahore</option>

                            <option value="Islamabad">Islamabad</option>

                            <option value="Hyderabad">Hyderabad</option>

                        </Select>

                        </div>

                        <div class="inputBox">

                            <span>Postal Code :</span>

                            <input type="number" placeholder="Enter your postal code" name="zip" required>

                        </div>

                    </div>

                </div>



                <div class="pay-col">

                    <h3 class="title">Order Information</h3>

                    <div class="inputBox onlyCod">


                        <p><i class="fa-solid fa-circle-info"></i>Only cash on delivery available right now</p>

                    </div>

                    <table class="">
            <thead>
                <tr>
                    <th>Serial no.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Remove</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                $total = 0;
                $grandTotal = 0;
                $i = 0;
                if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key => $values){
                        if($values['discount'] <= 0){
                            $total = intval(preg_replace('/[^\d.]/', '', $values['price'])) * $values['quantity'];
                        }else{
                            $total = intval(preg_replace('/[^\d.]/', '', $values['discount'])) * $values['quantity'];
                        }

                        if($values['discount'] <= 0){
                            $grandTotal += intval(preg_replace('/[^\d.]/', '', $values['price'])) * $values['quantity'];
                        }else{
                            $grandTotal += intval(preg_replace('/[^\d.]/', '', $values['discount'])) * $values['quantity'];
                        }
                        $i = $key + 1; 

                        
                        // $final = ;
                        echo"
                        <tr>
                            <td data-label='Serial no.'>$i</td>
                            <td data-label='Image'><img src='$values[image]' width='70px'></td>
                            <td data-label='Name'>$values[name]</td>
                            <td data-label='Price'>Rs.";?><?php
                             if($values['discount'] <= 0){
                                echo "$values[price]";
                            }else{
                                echo "$values[discount]";
                            }
                            echo"'></td>
                            <td data-label='Size'>$values[size]</td>
                            <td data-label='Quantity'>$values[quantity]</td>
                            <td data-label='Remove'>
                            <form action='includes/cart_pro.php' method='POST'>
                            <input type='submit' name='remove' value='remove' class='removebtn'>
                            
                            <input type='hidden' name='product' value='$values[name]'>
                            </form>
                            </td>
                            
                            <td data-label='Subtotal' class=''>
                            
                            </td>
                        </tr>
                        </form>
                        ";
                    }
                }
                
                ?>
<!--             cut this below line and paste in line after class subtotal  
                "; echo number_format($total, -1);echo" -->
            </tbody>
        </table>

                </div>

            </div>  


            <div class="pay-btns">

                <!-- <button  href="../cart.php">Cancel</button> -->

                <a href="../cart.php" class="submit-btn" style="text-decoration:none;">Cancel</a>

                <input type="submit" value="Confirm Order" name="submit" class="submit-btn">

            </div>

            

        </form>

    </div>

</body>

</html>