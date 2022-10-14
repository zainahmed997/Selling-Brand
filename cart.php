
<?php
// session_start();
// Assigning variable to change title and active class dynamically 
$title = 'Cart';
$active = 'cart';
include 'includes/header.php';
?>
<div class="loader"><img src="img/loader.gif"></div>
<div class="content">
<?php
include 'includes/navbar.php';
?>
    <section id="page-header" class="cart-header">
        
    </section>


    <div class="table-container">
        <h2 class="heading">Your Orders</h2>
        <table class="table">
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
                        <form action='includes/cart_pro.php' method='POST'>
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
                            echo "<input type='hidden' class='price' value='";?><?php
                            if($values['discount'] <= 0){
                               echo str_replace(',', '', "$values[price]");
                           }else{
                               echo str_replace(',', '', "$values[discount]");
                           }
                            echo"'></td>
                            <td data-label='Size'>$values[size]</td>
                            <td data-label='Quantity'>
                            <form action='includes/cart_pro.php' method='POST'>
                                <input type='number' class='quantity' name='updated_quantity' onchange='this.form.submit();' value ='$values[quantity]' min='1' max='5'>
                                <input type='hidden' name='product' value='$values[name]'>
                            </form>
                            </td>
                            <td data-label='Remove'>
                            <form action='includes/cart_pro.php' method='POST'>
                            <input type='submit' name='remove' value='remove' class='removebtn'>
                            
                            <input type='hidden' name='product' value='$values[name]'>
                            </form>
                            </td>
                            
                            <td data-label='Subtotal' class='subtotal'>
                            
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

    <section id="cart-add" class="section-p1">
        <!-- <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div> -->
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td class='gtotal'></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong class='gtotal'></strong></td>
                </tr>
            </table>
            <?php 
                if($grandTotal > 0){
                    if(!isset($_SESSION['profile'])){
                        echo "<button class='normal' onclick=\"login_err()\">Proceed to checkout</button>";
                    }
                    else{
                        echo "<button class='normal' onclick=\"window.location.href='payment.php' \">Proceed to checkout</button>";
                    }   
                }
                else{
                    echo "<button class='normal' onclick=\"window.location.href='payment.php'\" disabled style='opacity:0.8;'>Proceed to checkout</button>";
                }
            ?>
        </div>
    </section>

<?php 
include 'includes/newsletter.php';
include 'includes/footer.php';
?>
<script>
   
        // preloader script
        window.onload = function() {
        document.querySelector('.loader').style.display="none";
        document.querySelector('.content').style.display="block";
        };

        // if user not logged in below script runs
        function login_err(){
            alert('Please login/Signup first to proceed to checkout');
            document.getElementById('open-modal').click();
        }

        // totals will be auto update on increase in quantity
        var price = document.getElementsByClassName('price');
        var quantity = document.getElementsByClassName('quantity');
        var subtotal = document.getElementsByClassName('subtotal');
        var gtotal = document.getElementsByClassName('gtotal');
        var gt=0;

        // console.log(price);
        // console.log(quantity);
        // console.log(subtotal);
        // console.log(gtotal);
        
        

        function subTotal() {   
            gt=0;
            for(i=0;i<price.length;i++){
                subtotal[i].innerText=((price[i].value)*(quantity[i].value)).toLocaleString();
                gt=gt+(price[i].value)*(quantity[i].value);
            }
            gtotal[0].innerText=gt.toLocaleString();
            gtotal[1].innerText=gt.toLocaleString();

            gTotHidden.value = gt;
        }
        subTotal();

        
</script>
</div>