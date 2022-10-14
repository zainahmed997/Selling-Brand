    <?php 

    // Assigning variable to change title and active class dynamically 
    $title = 'Shop';
    $active = 'shop';
    include 'includes/header.php';
    ?>
<div class="loader"><img src="img/loader.gif"></div>
<div class="content">
    <?php
    include 'includes/navbar.php';
    ?>
    <section id="page-header" class="shop-header">
    </section>

        <ul class="indicator">
            <li data-filter="all" class="active">All</li>
            <li data-filter="Men">Men</li>
            <li data-filter="Women">Women</li>
            <li data-filter="Accessories">Accessories</li>
        </ul>

    <section id="product1" class="section-p1">
        <div class="pro-container items">
        <?php
            include 'includes/connection.php';
            $Record = mysqli_query($conn, "SELECT * FROM `add_product`");
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
        
            
        
        <!-- <div data-category="Men" class="pro" onclick="window.location.href='single-product-page/sproduct.php';">
                <span class="badge">70% Off</span>
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Men / Summer Shirts</span>
                    <h5>Mens Printed Summer Short-Sleeve Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,999 <small style="color: red; text-decoration: line-through;">Rs. 9,999</small></h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Accessories" class="pro">
                <img src="img/products/watch3.jpg" alt="">
                <div class="des">
                    <span>Men / Watches</span>
                    <h5>Grant Chronograph Navy Leather</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 7,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Women" class="pro">
                <img src="img/products/w7.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Voguish Chiffon Master Replica Women Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 8,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Accessories" class="pro">
                <img src="img/products/hb5.jpg" alt="">
                <div class="des">
                    <span>Women / Handbags</span>
                    <h5>Red Fancy Handbag For Women</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,599</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>

            <div data-category="Accessories" class="pro">
                <img src="img/products/hb2.jpg" alt="">
                <div class="des">
                    <span>Women / Handbags</span>
                    <h5>Black Stylish Handbag For Women</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,599</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Men" class="pro">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>Men / Summer Shirts</span>
                    <h5>Mens Printed Summer Short-Sleeve Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <h4>Rs. 4,799</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>        
            <div data-category="Men" class="pro">
                <span class="badge">50% Off</span>
                <img src="img/products/polo3.jpg" alt="">
                <div class="des">
                    <span>Men / Sweatshirts</span>
                    <h5>Mens Striped Slimfit Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 3,249 <small style="color: red; text-decoration: line-through;">Rs. 6,499</small></h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Accessories" class="pro">
                <img src="img/products/watch1.jpg" alt="">
                <div class="des">
                    <span>Men / Watches</span>
                    <h5>Datejust 36mm Blue Dial Fluted Bazel Jubilee</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 12,400</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>

            <div data-category="Men" class="pro">
                <img src="img/products/polo1.jpg" alt="">
                <div class="des">
                    <span>Men / Sweatshirts</span>
                    <h5>Mens Striped Slimfit Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 6,499</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Men" class="pro">
                <img src="img/products/polo2.jpg" alt="">
                <div class="des">
                    <span>Men / Sweatshirts</span>
                    <h5>Mens Striped Slimfit Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 6,499</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Accessories" class="pro">
                <img src="img/products/belt3.jpg" alt="">
                <div class="des">
                    <span>Men / Belts</span>
                    <h5>Italian Leather Belt With Logo Buckle</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,399</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Women" class="pro">
                <img src="img/products/w1.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Peach Glamour Formal Women Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 8,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>

            <div data-category="Women" class="pro">
                <img src="img/products/w2.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Stylish Grey Embroidered Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 8,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Women" class="pro">
                <img src="img/products/w8.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Mustard Shalwar Kameez Embroidered Women Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 8,499</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Men" class="pro">
                <img src="img/products/polo6.jpg" alt="">
                <div class="des">
                    <span>Men / Sweatshirts</span>
                    <h5>Mens Striped Slimfit Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 5,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Men" class="pro">
                <img src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>Men / Summer Shirts</span>
                    <h5>Mens Printed Summer Short-Sleeve Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <h4>Rs. 4,799</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>

            <div data-category="Accessories" class="pro">
                <img src="img/products/hb6.jpg" alt="">
                <div class="des">
                    <span>Women / Handbags</span>
                    <h5>Trendy Fashion Handbag For Women</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,599</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Accessories" class="pro">
                <img src="img/products/belt1.jpg" alt="">
                <div class="des">
                    <span>Men / Belts</span>
                    <h5>Fossil Men's Brown Leather Belt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 1,499</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Men" class="pro">
                <img src="img/products/polo4.jpg" alt="">
                <div class="des">
                    <span>Men / Sweatshirts</span>
                    <h5>Mens Striped Slimfit Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 6,499</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Accessories" class="pro">
                <img src="img/products/watch2.jpg" alt="">
                <div class="des">
                    <span>Men / Watches</span>
                    <h5>FB-01 Chronograph Tan Eco Leather Watch</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 7,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>

            <div data-category="Accessories" class="pro">
                <img src="img/products/watch4.jpg" alt="">
                <div class="des">
                    <span>Men / Watches</span>
                    <h5>Unique Black Day & Date Chain Watch for Men XDD-7068</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 9,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Men" class="pro">
                <img src="img/products/polo8.jpg" alt="">
                <div class="des">
                    <span>Men / Sweatshirts</span>
                    <h5>Mens Striped Slimfit Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 5,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Women" class="pro">
                <img src="img/products/w6.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Grey Embroidered Stitched Bridal Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 9,499</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Accessories" class="pro">
                <img src="img/products/hb4.jpg" alt="">
                <div class="des">
                    <span>Women / Handbags</span>
                    <h5>Black Descent Handbag For Women</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,499</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>

            <div data-category="Men" class="pro">
                <img src="img/products/polo7.jpg" alt="">
                <div class="des">
                    <span>Men / Sweatshirts</span>
                    <h5>Mens Striped Slimfit Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 5,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Women" class="pro">
                <img src="img/products/w9.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Grey Embroidered Khaddar Women Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 8,499</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Women" class="pro">
                <img src="img/products/w4.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Zahra Embroidered Collection Women Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 8,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Accessories" class="pro">
                <img src="img/products/hb3.jpg" alt="">
                <div class="des">
                    <span>Women / Handbags</span>
                    <h5>Black CATHY Casual Handbag For Women</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,599</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>

            <div data-category="Accessories" class="pro">
                <img src="img/products/belt4.jpg" alt="">
                <div class="des">
                    <span>Men / Belts</span>
                    <h5>Black Formal Wear Men's Leather Belt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,199</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Women" class="pro">
                <img src="img/products/w10.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Stitch 3 Piece Bridal Women Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 8,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Men" class="pro">
                <img src="img/products/f4.jpg" alt="">
                <div class="des">
                    <span>Men / Summer Shirts</span>
                    <h5>Mens Printed Summer Short-Sleeve Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <h4>Rs. 4,799</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Women" class="pro">
                <img src="img/products/w5.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Edenrobe Embroidered Women Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 8,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>

            <div data-category="Accessories" class="pro">
                <img src="img/products/belt2.jpg" alt="">
                <div class="des">
                    <span>Men / Belts</span>
                    <h5>Brown Vintage Men's Belt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,199</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Men" class="pro">
                <img src="img/products/polo5.jpg" alt="">
                <div class="des">
                    <span>Men / Sweatshirts</span>
                    <h5>Mens Striped Slimfit Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 5,999</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>     
            <div data-category="Women" class="pro">
                <img src="img/products/w3.jpg" alt="">
                <div class="des">
                    <span>Women / Dresses</span>
                    <h5>Simple White Fancy Women Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 8,499</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
            </div>
            <div data-category="Accessories" class="pro">
                <img src="img/products/hb1.jpg" alt="">
                <div class="des">
                    <span>Women / Handbags</span>
                    <h5>White Leather Handbag For Women</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2,599</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
        </div> -->
            
        </div>
    </section>

    <!-- <section id="pagination" class="section-p1">
        <a href="#" class="shop1-pag">1</a>
        <a href="shop2.php">2</a>
        <a href="shop2.php"><i class="fa-solid fa-arrow-right-long"></i></i></a>
    </section> -->

    <?php 
    include 'includes/newsletter.php';
    include 'includes/footer.php';
    ?>

    <script>
        let indicator = document.querySelector('.indicator').children;
        let main = document.querySelector('.items').children;

        for(let i=0; i<indicator.length; i++)
        {
            indicator[i].onclick = function(){
                for(let x=0; x<indicator.length; x++)
                {
                    indicator[x].classList.remove('active');
                }
                this.classList.add('active');
                const displayItems = this.getAttribute('data-filter');
                for(let z=0; z<main.length; z++)
                {
                    main[z].style.transform = 'scale(0)';
                    setTimeout(()=>{
                        main[z].style.display = 'none';
                    }, 500);

                    if ((main[z].getAttribute('data-category') == displayItems) || displayItems == 'all')
                    {
                        main[z].style.transform = 'scale(1)';
                        setTimeout(()=>{
                            main[z].style.display = 'block';
                        }, 500);
                    }
                }
            }
        }
        // wraper = items
    </script>
</div>