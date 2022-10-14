<?php 

    // Assigning variable to change title and active class dynamically 
    $title = 'Product Page';
    $active = 'shop';
    $stylelink = 'single'; 
    include 'includes/header.php';
    ?>
<div class="loader"><img src="img/loader.gif"></div>
<div class="content">
    <?php
    include 'includes/navbar.php';
    ?>
<?php
            error_reporting(0);
            include 'includes/connection.php';
            if(isset($_POST['submit-product'])){
                $image = $_POST['image'];
                $category = $_POST['category'];
                $sub_category = $_POST['sub-category'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $discountedPrice = $_POST['discountedPrice'];
                echo"
                    <section id='prodetails' class='section-p1'>
                        <div class='single-pro-image'>
                            <img src='$image' width='100%' id='MainImg'>
                        </div>

                        <div class='single-pro-details'>
                            <h6 style='color:#999;'>Shop / $category / $sub_category</h6>
                            <h4 style='padding-top:20px;'>$name</h4>
                            <h2 style='color: green; padding-bottom: 10px;'>Rs.";?>
                            <?php
                            if($discount <= 0){
                                echo "$price";
                            }
                            else{
                                $final = number_format((round($discountedPrice, -1) - 1 ));
                                echo $final."&nbsp;";
                                echo "<span style='color: red; text-decoration:line-through; font-size: 16px;'>$price</span>";
                            }
                              
                            echo "
                                </h2>
                                <form action='includes/cart_pro.php' method='POST'>
                                <input type='hidden' name='image' value='$image'>
                                <input type='hidden' name='name' value='$name'>
                                <input type='hidden' name='price' value='$price'>
                                <input type='hidden' name='discount' value='$final'>
                                <label><b>Select Size:</b></label>
                                <select style='margin-top: 10px;' name='size' required>
                                <!-- <option>Select Size</option> -->
                                    <option>Medium</option>
                                    <option>Large</option>
                                    <option>XL</option>
                                    <option>Small</option>
                                </select>
                                <input id='mouse-only-number-input' type='number' name='quantity' value='1' min='1' max='5' required>
                                <input type='submit' name='submit' class='atc' value='Add To Cart'>
                                </form>
                                <h4>Product Details</h4>
                                "; if($sub_category === "Summer Shirts"){
                                    echo "<ul>
                                            <li>100% Cotton</li>
                                            <li>Button closure</li>
                                            <li>Machine Wash</li>
                                            <li>Easy through chest and tapered through waist</li>
                                            <li>Soft, durable and cozy tumbled poplin for a lived-in feel right away</li>
                                            <li>Single chest pocket</li>
                                        </ul>";
                                    }
                                    elseif($sub_category === "Watches"){
                                        echo "<ul>
                                        <li>Modern Roman numeral markers and materials like stainless steel make this a watch you'll wear for years to come.</li>
                                        <li>Case size: 44mm; Band size: 22mm; quartz movement with analog chronograph display; hardened mineral crystal lens resists scratches.</li>
                                        <li>Water resistant to 50m (165ft): suitable for short periods of recreational swimming and showering, but not diving or snorkeling.</li>
                                    </ul>";
                                    }
                                    elseif($sub_category === "Dresses"){
                                        echo "<ul>
                                        <li>Soft Net</li>
                                        <li>Washable</li>
                                        <li>Soft Fabric</li>
                                        <li>This suit is Ready to wear. Just select your size & order. (3 pcs set)</li>
                                        <li>Salwar kameez Embroidery Stone Top Fabric Georgette Bottom Fabric Santoon (2 Mtr) Dupatta Fabric Georgette (2.25 Mtr) </li>
                                    </ul>";
                                    }
                                    elseif($sub_category === "Handbags"){
                                        echo "<ul>
                                        <li>Adjustable Strap: This satchel bag comes with an adjustable strap for more carrying options. Wear it your way and adjust its buckle on to suit your height.</li>
                                        <li>Compartments: It contains a spacious fabric-lined interior and an extra inner zipper pocket to store your cell phone, wallet or other daily essentials.</li>
                                        <li>Synthetic Material: Each handbag is made of high quality durable faux leather.</li>
                                        <li>Dimension: 11'W x 8.5'H x 4'D</li>
                                        <li>Strap type: Removable crossbody strap</li>
                                    </ul>";
                                    }
                                    elseif($sub_category === "Sweatshirts"){
                                        echo "<ul>
                                        <li>100% Cotton</li>
                                        <li>Be sure to clean the items after receiving them. For best results, always wash from the inside out at 30 degrees Celsius.</li>
                                        <li>Machine Wash</li>
                                        <li>Stretchable sleeves </li>
                                    </ul>";
                                    }
                                    elseif($sub_category === "Belts"){
                                        echo "<ul>
                                        <li>40% Bonded Leather, 38% Polyurethane, 22% Polyester</li>
                                        <li>Screw closure</li>
                                        <li>Leather-like material with soft and smooth touch</li>
                                        <li>Adjustable buckle closure</li>
                                    </ul>";
                                    }

                                echo"
                        </div>
                    </section>
                        ";
                            
            }
            // else{
            //     echo "<script>alert('sorry');</script>";
            // }
   ?>

<button class="backToShop"><a href="shop.php">Go back to Shop</a></button>

    <!-- <section id="product1" class="section-p1">
        <h2>Related Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
        <div data-category="men" class="pro">
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
                    <h4>Rs. 2,400</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
        </div>
        <div data-category="men" class="pro">
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
                    <h4>Rs. 2,400</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
        </div>
        <div data-category="men" class="pro">
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
                    <h4>Rs. 2,400</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
        </div>
        <div data-category="men" class="pro">
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
                    <h4>Rs. 2,400</h4>
                </div> 
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
        </div>
        </div>
    </section> -->

    <?php 
    include 'includes/newsletter.php';
    include 'includes/single_footer.php';
    ?>
    <script>
        window.onload = () => {
            //add event listener to prevent the default behavior
            const mouseOnlyNumberInputField = document.getElementById("mouse-only-number-input");
            mouseOnlyNumberInputField.addEventListener("keypress", (event) => {
                event.preventDefault();
            });
        }
        window.onload = function() {
        document.querySelector('.loader').style.display="none";
        document.querySelector('.content').style.display="block";
        };
    </script>
</div>