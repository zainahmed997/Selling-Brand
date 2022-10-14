<?php 
    // Assigning variable to change title and active class dynamically 
    $title = 'Settings';
    $active = 'settings';
    include 'includes/header.php';
    include 'includes/navbar.php';
    // session_start();
    if(!isset($_SESSION['profile'])){
        // header("location: index.php");
        echo "<script>window.location.href='index.php'</script>";
    }
?>
<div class="loader"><img src="img/loader.gif"></div>
<div class="content">
<section id="page-header" class="settings-header">        
</section>
    <section id="form-details">
        <h3 style="font-size:32px;">Profile Settings</h2>
        <div class="profile-settings">
            <?php
                include 'includes/connection.php';
                $gettingName = $_GET['name'];
                $userData = mysqli_query($conn, "SELECT * FROM `users` WHERE `name` = '$gettingName'");
                $data = mysqli_fetch_array($userData);


                $userOrder = mysqli_query($conn,"SELECT * FROM `orders` WHERE `email` = '$data[email]'");
                $fetch = mysqli_fetch_array($userOrder);
            ?>
            <form action="includes/setting_pro.php? name=$gettingName" method="POST">
                <label for="name" style="font-weight:700;">User Name:</label><br>
                <input type="text" name="name" id="name" value="<?php echo $data['name'] ?>"><br>

                <label for="email" style="font-weight:700;">Email:</label><br>
                <input type="email" name="email" id="email" value="<?php echo $data['email'] ?>"><br>

                <label for="password" style="font-weight:700;">Password:</label><br>
                <input type="text" name="password" id="password" autocomplete="off" value="<?php echo $data['password'] ?>">
                
                <input type="hidden" name="previous" value="<?php echo $data['name'] ?>">
                <input type="submit" value="Update" name="update" class="profile-btn">
            </form>  
        </div>
    </section>
<?php
if($fetch != ""){
?>
    <div class="table-container">
        <h2 class="heading">Your Orders</h2>
        <?php
            while($row = mysqli_fetch_array($userOrder)){
                echo "
                <table class='table'>
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$row[order_id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[address]</td>
                    <td>$row[city]</td>
                    <td>$row[postal]</td>
                    <td>$row[status]</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Size</th>
                    <th>Product Quantity</th>
                    <th>Product Subtotal</th>
                    <th>Grand Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src='$row[pro_image]' width='70px'></td>
                    <td>$row[pro_name]</td>
                    <td>$row[pro_price]</td>
                    <td>$row[pro_size]</td>
                    <td>$row[pro_quantity]</td>
                    <td>$row[pro_subtotal]</td>
                    <td>$row[pro_gtotal]</td>
                </tr>
            </tbody>
        </table>
        <br><br><br>
                ";
            }
        ?>
        <!-- <table class="table">
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $fetch['order_id']; ?></td>
                    <td><?php echo $fetch['name']; ?></td>
                    <td><?php echo $fetch['email']; ?></td>
                    <td><?php echo $fetch['address']; ?></td>
                    <td><?php echo $fetch['city']; ?></td>
                    <td><?php echo $fetch['postal']; ?></td>
                    <td><?php echo $fetch['status']; ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Size</th>
                    <th>Product Quantity</th>
                    <th>Product Subtotal</th>
                    <th>Grand Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="<?php echo $fetch['pro_image']; ?>" width="70px"></td>
                    <td><?php echo $fetch['pro_name']; ?></td>
                    <td><?php echo $fetch['pro_price']; ?></td>
                    <td><?php echo $fetch['pro_size']; ?></td>
                    <td><?php echo $fetch['pro_quantity']; ?></td>
                    <td><?php echo $fetch['pro_subtotal']; ?></td>
                    <td><?php echo $fetch['pro_gtotal']; ?></td>
                </tr>
            </tbody>
        </table> -->
        <div class="orderInfo">
        <p><i class="fa-solid fa-circle-info"></i>If you want to cancel order or any query, please <a href="contact.php"> contact us</a> or email us.</p>
        </div>
    </div>
<?php
}
?>

    <?php 
    include 'includes/newsletter.php';
    include 'includes/footer.php';
    ?>

</div>