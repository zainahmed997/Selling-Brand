<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTrend - Update Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="jpg" href="../images/favicon.jpg">
    <style>
        body{
            background-image: linear-gradient(to top, white, rgb(160, 160, 160));
            background-repeat:no-repeat;
        }
        form{
            padding: 20px 50px;
            margin-bottom:50px;
            box-shadow: 3px 3px 10px rgb(73, 73, 73);
        }
    </style>
</head>
<body>
<?php
    include 'connection.php';
    error_reporting(0);
    $nameUpdate = $_GET['name'];
    $priceUpdate = $_GET['price'];
    $discountUpdate = $_GET['discount'];
    $imageUpdate = $_GET['image'];
    $categoryUpdate = $_GET['category'];



?>



<div class="product-container">
        <form action="#" method="GET" enctype="multipart/form-data">
        <h2>Add Product</h2>
          <div class="fields">
            <label>Product Name:</label>
            <input type="text" name="name" value="<?php echo $nameUpdate; ?>">
            <label>Product Price:</label>
            <input type="number" name="price" id="price" value="<?php echo $priceUpdate; ?>">
            <label>Discount(optional):</label>
            <input type="range" id="discount" name="discount" min="0" max="100" step="5" value="<?php echo $discountUpdate; ?>">
            <div id="rangeVal"><?php echo $discountUpdate; ?></div>

            <label>Product Image:</label>
            <input type="file" name="image" id="file" accept="image/*">
            <label>Product Category:</label>
            <select name="category">
                <option value="">Select</option>
                <option value="Men">Men</option>
                <option value="Women">Women</option>
                <option value="Accessories">Accessories</option>
            </select>
            <label>Sub Category:</label>
            <select name="sub-category">
                <option value="">Select</option>
                <option value="Summer Shirts">Summer Shirts</option>
                <option value="Sweat Shirt">Sweat Shirt</option>
                <option value="Dresses">Dresses</option>
                <option value="Handbags">Handbags</option>
                <option value="Watches">Watches</option>
                <option value="Belts">Belts</option>
            </select>
          </div>
          <div class="btns">    
            <input type="submit" name="submit" value="Update">
            <input value="Cancel" type="reset"></input>
          </div>
        </form>
    </div>

    <?php
        if($_GET['submit']){
            $id = $_GET['id'];
            $name = $_GET['name'];
            $price = $_GET['price'];
            $discount = $_GET['discount'];
            $image = $_GET['image'];
            $category = $_GET['category'];
            $sub_category = $_GET['sub-category'];
            
            $updating = mysqli_query($conn, "UPDATE `add_product` SET `name` = '$name', `price` = '$price', `discount` = '$discount', `image` = '$image', `category` = '$category', `sub_category` = '$sub_category' WHERE `id` = $id");

            if($updating){
                echo "<script>alert('Product Updated Successfully'); window.location.href = 'product.php'</script>";
            }
            else{
                echo "<script>alert('Error');</script>";
            }
        }
    ?>


    <script>
        const rangeVal = document.getElementById("rangeVal");
         const discount = document.getElementById("discount");
         discount.oninput = (()=>{
            let value = discount.value;
            rangeVal.textContent = value;
         });
    </script>
    </body>
</html>