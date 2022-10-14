<?php
// session_start();
// Assigning variable to change title and active class dynamically 
$title = 'Checkout';
$active = 'cart';
include 'includes/header.php';
?>
<!-- <div class="loader"><img src="img/loader.gif"></div>
<div class="content"> -->
<?php
include 'includes/navbar.php';
include 'includes/connection.php';
$profileName = $_SESSION["profile"];
$query = mysqli_query($conn, "SELECT `email` FROM `users` WHERE `name` = '$profileName'");
$profileEmail = mysqli_fetch_array($query);
?>
    <div class="pay-container">
        <form action="includes/payment_pro.php" method="POST" spellcheck="false">
            <div class="pay-row">
                <div class="pay-col">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <span>Full Name :</span>
                        <input type="text" placeholder="Enter your full name" name="name" autocomplete="off" required>
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="Enter your email" name="email" value="<?php echo $profileEmail[0]; ?>" readonly>
                    </div>
                    <div class="inputBox">
                        <span>Address :</span>
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
                            <input type="number" placeholder="Enter your postal code" name="postal" required>
                        </div>
                    </div>
                </div>
                <div class="pay-col">
                    <h3 class="title">Order Information</h3>
                    <div class="inputBox onlyCod">
                        <p><i class="fa-solid fa-circle-info"></i>Only cash on delivery available right now</p>
                    </div>
                    <table class="paymentTable">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
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
                            echo"</td>
                            <td data-label='Size'>$values[size]</td>
                            <td data-label='Quantity'>$values[quantity]</td>
                            
                            <td data-label='Subtotal' class='subtotal'>";
                            if($values['discount'] <= 0){
                                $noDiscount = number_format(str_replace(',', '', "$values[price]")*$values['quantity']);
                                echo $noDiscount;
                            }else{
                                $Discount = number_format(str_replace(',', '', "$values[discount]")*$values['quantity']);
                                echo $Discount;
                            }
                            
                            echo "</td>
                        </tr>
                        ";?>
                        <input type="hidden" name="pro_image[]" value="<?php echo $values['image']; ?>">
                        <input type="hidden" name="pro_name[]" value="<?php echo $values['name']; ?>">
                        <input type="hidden" name="pro_price[]" value="<?php if($values['discount'] <= 0){echo $values['price'];}else{echo $values['discount'];}; ?>">
                        <input type="hidden" name="pro_size[]" value="<?php echo $values['size']; ?>">
                        <input type="hidden" name="pro_quantity[]" value="<?php echo $values['quantity']; ?>">
                        <input type="hidden" name="pro_subtotal[]" value="<?php if($values['discount'] <= 0){echo $noDiscount;}else{echo $Discount;} ?>">
                        <input type="hidden" name="status" value="Pending">

                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <div id="subtotal">
        <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td class='gtotal'><?php echo number_format($grandTotal); ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong class='gtotal'><?php echo number_format($grandTotal); ?></strong></td>
                </tr>
            </table>
            </div>
                </div>
            </div>  
            <div class="pay-btns">
                <a href="cart.php" class="submit-btn" style="text-decoration:none;">Cancel</a>
                <input type="hidden" name="pro_gtotal" value="<?php echo number_format($grandTotal); ?>">
                <input type="submit" value="Confirm Order" name="submit" class="submit-btn">
            </div>
            </form>
    </div>
    <?php 
include 'includes/newsletter.php';
include 'includes/footer.php';
?>