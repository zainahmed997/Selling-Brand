
<?php 

    // Assigning variable to change title and active class dynamically 
    $title = 'Contact';
    $active = 'contact';
    include 'includes/header.php';
    ?>
<div class="loader"><img src="img/loader.gif"></div>
<div class="content">
    <?php
    include 'includes/navbar.php';
?>
<section id="page-header" class="contact-header">
        
</section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our outlet locations or contact us today</h2>
            <h3>Main Branch</h3>
            <div>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <p>A-486 Allama Shabbir Ahmed Usmani Rd, Block 6 Gulshan-e-Iqbal</p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>muhammadbasim925@gmail.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>(021) 34980576/ 0900-78601</p>
                </li>
                <li>
                    <i class="fa-solid fa-clock"></i>
                    <p>Monday to Saturday 9:00am - 10:00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3042.4937986555524!2d67.0935276160935!3d24.9267797989295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338caa5ac57cb%3A0x2c4b1fc512ab6bb!2sAptech%20Computer%20Education%20Gulshan-e-Iqbal%20Campus!5e0!3m2!1sen!2s!4v1655829180440!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="includes/contact_pro.php" method="POST">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name" name="name" required> 
            <input type="text" placeholder="Your E-mail" name="email" required> 
            <textarea cols="30" rows="10" style="resize:none;" placeholder="Your Message" name="message" required></textarea>
            <input type="submit" class="normal" name="submit-btn" value="Submit">
        </form>

        <!-- <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br> Phone: 0900-78601 <br> Email: jhon@gmail.com</p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>William Smith</span> Senior Marketing Manager <br> Phone: 0900-78601 <br> Email: william@gmail.com</p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Emma Stone</span> Senior Marketing Manager <br> Phone: 0900-78601 <br> Email: emma@gmail.com</p>
            </div>
        </div> -->
    </section>

    <?php 
    include 'includes/newsletter.php';
    include 'includes/footer.php';
    ?>

