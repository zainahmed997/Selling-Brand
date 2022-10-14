<div class="table-container">
        <h2 class="heading">Your Orders</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php


                    $findingOrder = mysqli_query($conn,"SELECT * FROM `orders` WHERE `email` = '$data[email]' ");

                    $fetch = mysqli_fetch_array($findingOrder);
                        
                        // $final = ;
                        echo"
                        <tr>
                            <td data-label='Order ID'>$fetch[order_id]</td>
                            <td data-label='name'>$fetch[name]</td>
                            <td data-label='email'>$fetch[email]</td>
                            <td data-label='address'>$fetch[address]</td>
                            <td data-label='city'>$fetch[city]</td>
                            <td data-label='postal'>$fetch[postal]</td>
                            <td data-label='total'>$fetch[pro_gtotal]</td>
                            <td data-label='status'>$fetch[status]</td>
                        </tr>
                        ";
                
                ?>
            </tbody>
        </table>
    </div>