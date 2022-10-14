<?php session_start(); ?>
<section id="header">
        <a href="index.php"><img src="img/Btrend.png" class="logo" alt="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="<?php if($active == 'index'){ echo 'active';} ?>" href="index.php">Home</a></li>
                <li><a class="<?php if($active == 'shop'){ echo 'active';} ?>" href="shop.php">Shop</a></li>
                <li><a class="<?php if($active == 'about'){ echo 'active';} ?>" href="about.php">About</a></li>
                <li><a class="<?php if($active == 'contact'){ echo 'active';} ?>" href="contact.php">Contact</a></li>
                <li><a class="<?php if($active == 'feedback'){ echo 'active';} ?>" href="feedback.php">Feedback</a></li>
                <?php
                if(isset($_SESSION["profile"])){
                  echo "<li><a href='./settings.php?name=$_SESSION[profile]' class=' ";
                  if($active == 'settings'){echo 'active';} echo " '><i class='fas fa-user' style='padding-right:3px;'></i>";
                  echo $_SESSION["profile"];
                  echo "</a></li>";     
                }
                ?>
                <?php
                if(isset($_SESSION["profile"])){
                  echo "<button id='logout' style='font-weight:700; padding: 10px 20px; background-color: #088178; border: 2px solid transparent; border-radius: 20px; color: #c0e4e3; transition: 0.3s ease;'><a href='includes/logout.php' style='text-decoration: none; color:inherit;'>Logout</a></button>";
                }
                else{
                  echo "<button id='open-modal' style='font-weight:700; padding: 10px 20px; background-color: #088178; border: 2px solid transparent; border-radius: 20px; color: #c0e4e3; transition: 0.3s ease;'>Login/Signup</button>";
                }
                ?>
                <?php
                $count = 0;
                  if(isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                  }
                ?>
                <li class="lg-bag" id="lg-bag-cart"><a class="<?php if($active == 'cart'){ echo 'active';} ?>" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><span class="cart-num"><?php echo $count; ?></span></a></li> 
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php" class="lg-bag"><i class="fa-solid fa-cart-shopping"><span class="cart-num">0</span></i></a>
            <i id="bar" class="fas fa-outdent" onclick="openNav()"></i>
        </div>
</section>
<div id="mobile-nav" class="hide">
  <ul>  
    <li><a class="<?php if($active == 'index'){ echo 'active';} ?>" href="index.php">Home</a></li>
    <li><a class="<?php if($active == 'shop'){ echo 'active';} ?>" href="shop.php">Shop</a></li>
    <li><a class="<?php if($active == 'about'){ echo 'active';} ?>" href="about.php">About</a></li>
    <li><a class="<?php if($active == 'contact'){ echo 'active';} ?>" href="contact.php">Contact</a></li>  
    <li><a class="<?php if($active == 'feedback'){ echo 'active';} ?>" href="feedback.php">Feedback</a></li>
    <?php
    if(isset($_SESSION["profile"])){
      echo "<li><a href='./settings.php?name=$_SESSION[profile]' class=' ";
      if($active == 'settings'){ echo 'active';}
      echo " '><i class='fas fa-user' style='padding-right:3px;'></i>";
      echo $_SESSION["profile"];
      echo "</a></li>";     
    }
    if(isset($_SESSION["profile"])){
      echo "<button id='logout' style='font-weight:700; padding: 10px 20px; background-color: #C0E4E3; border: 2px solid transparent; border-radius: 20px; color: #088178; transition: 0.3s ease;'><a href='includes/logout.php' style='text-decoration: none; color:inherit;'>Logout</a></button>";
    }
    else{
      echo "<button id='open-modal' onclick='openModal()' style='font-weight:700; padding: 10px 20px; background-color: #C0E4E3; border: 2px solid transparent; border-radius: 20px; color: #088178; transition: 0.3s ease;'>Login/Signup</button>";
    }
    ?>
    <?php
    $count = 0;
      if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
      }
    ?>
    <li class="lg-bag" id="lg-bag-cart"><a class="<?php if($active == 'cart'){ echo 'active';} ?>" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><span class="cart-num"><?php echo $count; ?></span></a></li> 
  </ul>
</div>
    <?php
    // session_start();
      if(isset($_SESSION['passError'])){
        ?>
        <div class="alert show">
          <span class="fas fa-exclamation-circle"></span>
          <span class="msg"><?php echo $_SESSION['passError']; ?></span>
          <span class="alert-close">
            <span class="fas fa-times"></span>
          </span>
        </div>
          <script>
            const alertSlide = document.querySelector(".alert");
            const close_alert = document.querySelector(".alert-close");
            close_alert.addEventListener("click",()=>{
              alertSlide.classList.add("hide");
              alertSlide.classList.remove("show");
              setTimeout(function() {
                alertSlide.style.display = 'none';
              }, 1000);
            })
          </script>
        <?php
        unset($_SESSION['passError']);
      }
      if(isset($_SESSION['dupEmail'])){
        ?>
          <div class="alert show">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg"><?php echo $_SESSION['dupEmail']; ?></span>
                <span class="alert-close">
                  <span class="fas fa-times"></span>
                </span>
            </div>
            <script>
              const alertSlide = document.querySelector(".alert");
              const close_alert = document.querySelector(".alert-close");
              close_alert.addEventListener("click",()=>{
                alertSlide.classList.add("hide");
                alertSlide.classList.remove("show");
                setTimeout(function() {
                  alertSlide.style.display = 'none';
                }, 1000);
              })
            </script>
        <?php
        unset($_SESSION['dupEmail']);
      }
      if(isset($_SESSION['signup'])){
        ?>
          <div class="alert show">
              <span class="fas fa-exclamation-circle"></span>
              <span class="msg"><?php echo $_SESSION['signup']; ?></span>
              <span class="alert-close">
                <span class="fas fa-times"></span>
              </span>
          </div>
          <script>
            const alertSlide = document.querySelector(".alert");
            const close_alert = document.querySelector(".alert-close");
            close_alert.addEventListener("click",()=>{
              alertSlide.classList.add("hide");
              alertSlide.classList.remove("show");
              setTimeout(function() {
                alertSlide.style.display = 'none';
              }, 1000);
            })
            setTimeout(function() {
              alertSlide.classList.add("hide");
              alertSlide.classList.remove("show");
              setTimeout(function() {
                alertSlide.style.display = 'none';
              }, 1000);
            }, 5000);
          </script>
        <?php
        unset($_SESSION['signup']);
      }
      if(isset($_SESSION['loginSuccess'])){
        ?>
          <div class="alert show">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg"><?php echo $_SESSION['loginSuccess']; ?></span>
                <span class="alert-close">
                  <span class="fas fa-times"></span>
                </span>
            </div>
            <script>
              const alertSlide = document.querySelector(".alert");
              const close_alert = document.querySelector(".alert-close");
              close_alert.addEventListener("click",()=>{
                alertSlide.classList.add("hide");
                alertSlide.classList.remove("show");
                setTimeout(function() {
                  alertSlide.style.display = 'none';
                }, 1000);
              })
              setTimeout(function() {
              alertSlide.classList.add("hide");
              alertSlide.classList.remove("show");
              setTimeout(function() {
                alertSlide.style.display = 'none';
              }, 1000);
            }, 5000);
            </script>
        <?php
        unset($_SESSION['loginSuccess']);
      }
      if(isset($_SESSION['logoutSuccess'])){
        ?>
          <div class="alert show">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg"><?php echo $_SESSION['logoutSuccess']; ?></span>
                <span class="alert-close">
                  <span class="fas fa-times"></span>
                </span>
            </div>
            <script>
              const alertSlide = document.querySelector(".alert");
              const close_alert = document.querySelector(".alert-close");
              close_alert.addEventListener("click",()=>{
                alertSlide.classList.add("hide");
                alertSlide.classList.remove("show");
                setTimeout(function() {
                  alertSlide.style.display = 'none';
                }, 1000);
              })
              setTimeout(function() {
              alertSlide.classList.add("hide");
              alertSlide.classList.remove("show");
              setTimeout(function() {
                alertSlide.style.display = 'none';
              }, 1000);
            }, 5000);
            </script>
        <?php
        unset($_SESSION['logoutSuccess']);
      }
      if(isset($_SESSION['incorrect'])){
        ?>
          <div class="alert show">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg"><?php echo $_SESSION['incorrect']; ?></span>
                <span class="alert-close">
                  <span class="fas fa-times"></span>
                </span>
            </div>
            <script>
              const alertSlide = document.querySelector(".alert");
              const close_alert = document.querySelector(".alert-close");
              close_alert.addEventListener("click",()=>{
                alertSlide.classList.add("hide");
                alertSlide.classList.remove("show");
                setTimeout(function() {
                  alertSlide.style.display = 'none';
                }, 1000);
              })
            </script>
        <?php
        unset($_SESSION['incorrect']);
      }
      ?>
    <div class="modal-container" id="modal_container">
      <div class="modal">
        <h2 id="modal-heading">Signup</h2>
        <form action="includes/signup.php" method="POST" class="signup signup-form">
          <div class="fields">
            <label>Username:</label>
            <input type="text" name="name" placeholder="Enter Your Username" required>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter Your Password" required>
            <label>Confirm Password:</label>
            <input type="password" name="cpassword" placeholder="Repeat Your Password" required>
          </div>
          <div class="modal-btns">    
            <input type="submit" class="submit" name="signup" value="Signup">
            <button id="close-modal-signup" value="cancel" type="reset">Cancel</button>
          </div>
          <p class="form-p">Already have an account? <span class="login-btn">Login here</span></p>
        </form>
        <form action="includes/login.php" method="POST" class="login">
          <div class="fields">
            <label>Email:</label>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter Your Password" required>
          </div>
          <div class="modal-btns">    
            <input type="submit" class="submit" name="login" value="Login">
            <button id="close-modal" value="cancel" type="reset">Cancel</button>
          </div>
          <p class="form-p">Don't have an account? <span class="signup-btn">Signup here</span></p>
        </form>
      </div>
    </div>
    <script>
      //Toggle between login and Signup Code
      const signupBtn = document.querySelector(".signup-btn");
      const loginBtn = document.querySelector(".login-btn");
      const signup = document.querySelector(".signup");
      const login = document.querySelector(".login");
      loginBtn.addEventListener("click",()=>{
        login.classList.add("login-form");
        signup.classList.remove("signup-form");
        document.getElementById("modal-heading").innerHTML = "Login";
      })
      signupBtn.addEventListener("click",()=>{
        signup.classList.add("signup-form");
        login.classList.remove("login-form");
        document.getElementById("modal-heading").innerHTML = "Signup";
      })
      // To open and close modal code
        const open_modal = document.getElementById('open-modal');
        const modal_container = document.getElementById('modal_container');
        const close_modal = document.getElementById('close-modal');
        const close_modal_signup = document.getElementById('close-modal-signup');
        open_modal.addEventListener('click', () => {
            modal_container.classList.add('show');
            document.body.style.overflow = "hidden";
        })
        close_modal.addEventListener('click', () => {
            modal_container.classList.remove('show');
            document.body.style.overflow = "initial";
        })
        close_modal_signup.addEventListener('click', () => {
            modal_container.classList.remove('show');
            document.body.style.overflow = "initial";
        })
        function toggleModal(){
            if(getComputedStyle(modal_container).display==="flex") {
                modal_container.classList.remove('show');
                document.body.style.overflow = "initial";
            }
            else{
                modal_container.classList.add('show');
                document.body.style.overflow = "hidden";
            }
        }
        const mobile = document.getElementById("mobile-nav");
        function openNav() {
        document.getElementById('mobile-nav').classList.toggle('hide');
        }
        function openModal(){
          open_modal.click();
        }
        // setTimeout("autoOpenModal()",10000)
        // function autoOpenModal()
        // {
        //   open_modal.click();   
        // }
    </script>