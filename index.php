
    <?php 

    // Assigning variable to change title and active class dynamically
    $title = 'Home';
    $active = 'index';
    include 'includes/header.php';
    ?>
    <!-- <div class="loader"><img src="img/loader.gif"></div>
    <div class="content"> -->
    <?php
    include 'includes/navbar.php';
    ?>
    
    
    <section id="hero">
        <h4>New Summer Collection Available!</h4>
        <h2>why follow a trend <br> when you can <span style="color: #088178;">BTrend</span></h2>
        <p>Shop Now and get limited discount up to 70% off!</p>
        <button onclick="window.location.href='shop.php';">Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
        <?php
            include 'includes/connection.php';
            $Record = mysqli_query($conn, "SELECT * FROM `add_product` WHERE `sub_category` = 'Summer Shirts' OR `name` = 'Peach Glamour Formal Women Dress' OR `name` = 'Stylish Grey Embroidered Dress' OR `name` = 'Mustard Shalwar Kameez Embroidered Women Dress' OR `name` = 'Voguish Chiffon Master Replica Women Dress'");
            while($row = mysqli_fetch_array($Record)){
                
                //Below code is to add comma after 3 digits
                $priceData = mysqli_query($conn, "SELECT price FROM `add_product` WHERE `id` = $row[id]");
                while ($priceRow = $priceData->fetch_assoc()) {
                    $price = $priceRow['price'];
                    $priceComma = number_format($priceRow['price']);
                }
                
                echo "
                
                <div data-category='$row[category]' class='pro' id='table-data'>
                ";?>
                <?php
                if($row['discount']>0){
                    echo"<span class='badge'>$row[discount]% Off</span>";
                } 
                echo"
                    
                    <img src='admin/$row[image]'>
                    <div class='des'>
                        <span>$row[category] / $row[sub_category]</span>
                        <h5>$row[name]</h5>
                        <div class='star'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                        </div>
                        <h4>Rs. ";?>
                        <?php
                        if(!$row['discount']>0){
                            echo $priceComma;
                        }
                        else{
                            $discountedPrice = (100 - $row['discount']) * $price / 100 ;
                            echo number_format((round($discountedPrice, -1) - 1 ))."&nbsp;";
                            echo "<small style='color: red; text-decoration: line-through;'>Rs. $priceComma</small>";
                        }
                        ?>
                        <?php
                        if($row['discount']>0){
                            
                        }
                        echo" </h4> 
                </div> 
                <form action='sproduct.php' method='POST'>
                <input type='hidden' name='image' value='admin/$row[image]'>
                <input type='hidden' name='category' value='$row[category]'>
                <input type='hidden' name='sub-category' value='$row[sub_category]'>
                <input type='hidden' name='name' value='$row[name]'>
                <input type='hidden' name='price' value='$priceComma'>
                <input type='hidden' name='discount' value='$row[discount]'>
                <input type='hidden' name='discountedPrice' value='$discountedPrice'>
                <a href='sproduct.php'><i class='fa-solid fa-cart-shopping cart'><input type='submit' name='submit-product' value=''></i></a>
                </form>
            </div>

            
            
            
                ";
            }
        ?>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h2>Up to <span>70% OFF</span> &nbsp; On T-Shirts & Accessories</h2>
        <button class="normal" onclick="window.location.href='shop.php';">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Collection of New Modern Design</p>
        <div class="pro-container">
        <?php
            include 'includes/connection.php';
            $Record = mysqli_query($conn, "SELECT * FROM `add_product` WHERE `name` = 'Mens Dark Blue Striped Slimfit Sweatshirt' OR `name` = 'Mens Navy Blue Striped Slimfit Sweatshirt' OR `name` = 'Mens Striped Slimfit Sweatshirt' OR `name` = 'Mens Maroon Striped Slimfit Sweatshirt' OR `name` = 'Red Fancy Handbag For Women' OR `name` = 'Black Stylish Handbag For Women' OR `name` = 'Grant Chronograph Navy Leather' OR `name` = 'Datejust 36mm Blue Dial Fluted Bazel Jubilee'");
            while($row = mysqli_fetch_array($Record)){
                
                //Below code is to add comma after 3 digits
                $priceData = mysqli_query($conn, "SELECT price FROM `add_product` WHERE `id` = $row[id]");
                while ($priceRow = $priceData->fetch_assoc()) {
                    $price = $priceRow['price'];
                    $priceComma = number_format($priceRow['price']);
                }
                
                echo "
                
                <div data-category='$row[category]' class='pro' id='table-data'>
                ";?>
                <?php
                if($row['discount']>0){
                    echo"<span class='badge'>$row[discount]% Off</span>";
                } 
                echo"
                    
                    <img src='admin/$row[image]'>
                    <div class='des'>
                        <span>$row[category] / $row[sub_category]</span>
                        <h5>$row[name]</h5>
                        <div class='star'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                        </div>
                        <h4>Rs. ";?>
                        <?php
                        if(!$row['discount']>0){
                            echo $priceComma;
                        }
                        else{
                            $discountedPrice = (100 - $row['discount']) * $price / 100 ;
                            echo number_format((round($discountedPrice, -1) - 1 ))."&nbsp;";
                            echo "<small style='color: red; text-decoration: line-through;'>Rs. $priceComma</small>";
                        }
                        ?>
                        <?php
                        if($row['discount']>0){
                            
                        }
                        echo" </h4> 
                </div> 
                <form action='sproduct.php' method='POST'>
                <input type='hidden' name='image' value='admin/$row[image]'>
                <input type='hidden' name='category' value='$row[category]'>
                <input type='hidden' name='sub-category' value='$row[sub_category]'>
                <input type='hidden' name='name' value='$row[name]'>
                <input type='hidden' name='price' value='$priceComma'>
                <input type='hidden' name='discount' value='$row[discount]'>
                <input type='hidden' name='discountedPrice' value='$discountedPrice'>
                <a href='sproduct.php'><i class='fa-solid fa-cart-shopping cart'><input type='submit' name='submit-product' value=''></i></a>
                </form>
            </div>

            
            
            
                ";
            }
        ?>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box banner-box1"  onclick="window.location.href='shop.php';">
            <h2>Shop Now</h2>
        </div>
        <div class="banner-box banner-box2"  onclick="window.location.href='shop.php';">
            <h4>Spring/Summer</h4>
            <h2>upcoming season</h2>
            <span>The Best classic dresses is on sale at BTrend</span>
            <button class="white">Shop now</button>
        </div>
    </section>

    <?php
        include 'includes/newsletter.php';
        include 'includes/footer.php';
    ?>
</div>