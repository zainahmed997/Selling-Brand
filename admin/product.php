<?php
    $title = 'Add Product';
    $active = 'product';
    include 'includes/header.php';
    include 'includes/navbar.php';
    session_start();
    if(!$_SESSION['admin']){
        header("location: form/login.php");
    }
?>
    <div class="product-container">
        <form action="includes/add_product.php" method="POST" enctype="multipart/form-data">
        <h2>Add Product</h2>
          <div class="fields">
            <label>Product Name:</label>
            <input type="text" name="name" placeholder="Enter Product Name" autocomplete="off" required>
            <label>Product Price:</label>
            <input type="number" name="price" id="price" placeholder="Enter Product Price" required>
            <label>Discount(optional):</label>
            <input type="range" id="discount" name="discount" min="0" max="100" step="5" value="0">
            <div id="rangeVal">0</div>

            <label>Product Image:</label>
            <input type="file" name="image" id="file" accept="image/*" required>
            <label>Product Category:</label>
            <select name="category" required>
                <option value="">Select</option>
                <option value="Men">Men</option>
                <option value="Women">Women</option>
                <option value="Accessories">Accessories</option>
            </select>
            <label>Sub Category:</label>
            <select name="sub-category" required>
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
            <input type="submit" name="submit" value="Upload">
            <input value="Reset" type="reset"></input>
          </div>
        </form>
    </div>

    <div class="table-container">
        <h2 class="heading">All Products</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "includes/connection.php";
                $record = mysqli_query($conn,"SELECT * FROM `add_product` ORDER BY id DESC");
                while($row = mysqli_fetch_array($record))
                echo "
                <form action='includes/add_product.php' method='POST'>
                    <tr>
                        <td data-label='ID'><input type='hidden' name='rowId' value='$row[id]'>$row[id]</td>
                        <td data-label='Name'>$row[name]</td>
                        <td data-label='Price'>$row[price]</td>
                        <td data-label='Discount'>$row[discount]</td>
                        <td data-label='Image'><img src='$row[image]' style='width:70px;'></td>
                        <td data-label='Category'>$row[category]</td>
                        <td data-label='Delete'><button name='delete'>Delete</button></td>
                    </tr>
                </form>
                ";
            ?>  
            </tbody>
        </table>
    </div>        
<?php
    include 'includes/footer.php';
?>