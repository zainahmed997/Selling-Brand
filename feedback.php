
<?php 

    // Assigning variable to change title and active class dynamically 
    $title = 'Feedback';
    $active = 'feedback';
    include 'includes/header.php';
    include 'includes/navbar.php';
?>

<div class="loader"><img src="img/loader.gif"></div>
<div class="content">

<section id="page-header" class="feedback-header">
        
</section>

    <section id="feedback-details" class="section-p1">
        <div>
            <h3 style="font-size: 26px;">FEEDBACK FORM</h3>
            <p style="font-size: 20px;">We would love to hear your thoughts, suggestions, concerns, or problems with anything so we can improve!  </p>
            <hr>
        </div>
        <form action="includes/feedback_pro.php" method="POST">
        <div class="feedback-form">
            <h3>Feedback Type:</h3>
            <div class="feedback-type">
                <div class="type-option">
                    <input type="radio" value="comments" id="comments" name="type" required>
                    <label for="comments">comments</label>
                </div>

                <div class="type-option">
                    <input type="radio" value="suggestions" id="suggestions" name="type" required>
                    <label for="suggestions">suggestions</label>
                </div>

                <div class="type-option">
                    <input type="radio" value="questions" id="questions" name="type" required>
                    <label for="questions">questions</label>
                </div>
            </div>

            <div class="feedback-name">
                <label for="name" style="font-weight:700;">Name:</label><br>
                <input type="text" name="name" id="name" placeholder="Enter your name" autocomplete="off" spellcheck="false" required><br>

                <label for="email" style="font-weight:700;">Email:</label><br>
                <input type="email" email="email" id="email" placeholder="Enter your email" required>
            </div>

            <label for="feedback">Describe Your Feedback:</label>
            <textarea name="feedback" cols="100" rows="10" id="feedback" placeholder="Write your feedback" required></textarea>

            <input type="submit" value="Submit" name="submit" class="feedback-btn">
        </div>
        </form>
    </section>

    <?php 
    include 'includes/newsletter.php';
    include 'includes/footer.php';
    ?>

</div>

