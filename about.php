
<?php 

    // Assigning variable to change title and active class dynamically 
    $title = 'About';
    $active = 'about';
    include 'includes/header.php';
    ?>
<div class="loader"><img src="img/loader.gif"></div>
<div class="content">
    <?php
    include 'includes/navbar.php';
    ?>
<section id="page-header" class="about-header">
        <h2>Why follow a trend when you can <span>BTrend</span></h2>
</section>

<section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>BTrend is a fashion clothes brand which offers women & men clothes and clothing assessories like handbags for women and wathes and belts for men, we have every seasons clothes with amazing deals and discounts </p>
            
            <br><br>

            <marquee bgcolor="#C0E4E3" loop="-1" scrollamount="5" width="100%" >Upto 70% Off on men's sweat shirts and women clothes and you can get discount on watches and handbags.</marquee>
        </div>
</section>

<!-- <section id="about-app" class="section-p1">
        <h1>Download Our <a href="error.php">App</a></h1>
        <div class="video">
            <video src="img/about/1.mp4" autoplay muted loop></video>
        </div>
</section> -->

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

    <?php 
    include 'includes/newsletter.php';
    include 'includes/footer.php';
    ?>
</div>