<div class="navigation">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="title company"><h2>BTrend</h2></span>
                    </a>
                </li>
                <li>
                    <a href="index.php" class="<?php if($active == 'dashboard'){ echo 'active';} ?>">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="product.php" class="<?php if($active == 'product'){ echo 'active';} ?>">
                        <span class="icon"><i class="fa-solid fa-cart-plus"></i></span>
                        <span class="title">Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="orders.php" class="<?php if($active == 'orders'){ echo 'active';} ?>">
                        <span class="icon"><i class="fa-solid fa-list-check"></i></span>
                        <span class="title">Orders</span>
                    </a>
                </li>
                <li>
                    <a href="users.php" class="<?php if($active == 'users'){ echo 'active';} ?>">
                        <span class="icon"><i class="fa-solid fa-users"></i></span>
                        <span class="title">Users</span>
                    </a>
                </li>
                <li>
                    <a href="account.php" class="<?php if($active == 'account'){ echo 'active';} ?>">
                        <span class="icon"><i class="fa-solid fa-user-gear"></i></span>
                        <span class="title">My Account</span>
                    </a>
                </li>
                <li>
                    <a href="form/logout.php">
                        <span class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>


        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu()"></div>

                <div class="user">
                    <a href="account.php">
                        <img src="images/btrend.png" alt="">
                    </a>
                </div>
            </div>