<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/title_logo.png">
    <title>College Solutions | Best for you</title>
    <link rel="stylesheet" href="css/main_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <section id="banner">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/banner-1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/banner-2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/banner-3.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <div id="body-container">
        <article class="why-us">
            <h2>Why College Solutions?</h2>
            <p>Your search is unique.
                Just like you.
            </p>
            <div class="site-features-container">
                <div class="site-feature">
                    <img src="images/feature-1.png" alt="no heavy lifting">
                    <h3>NO HEAVY LIFTING</h3>
                    <P>We analyze data so you don't have to.</P>
                </div>
                <div class="site-feature">
                    <img src="images/feature-2.png" alt="the good, the bad & the honest">
                    <h3>THE GOOD, THE BAD & THE HONEST</h3>
                    <P>Our user reviews let you hear directly from families and students to give you an honest and
                        holistic
                        view.</P>
                </div>
                <div class="site-feature">
                    <img src="images/feature-3.png" alt="best fit">
                    <h3>BEST FIT</h3>
                    <P>We personalize your search based on what's most imporntant to you.</P>
                </div>
            </div>
        </article>
        <section class="register-section">
            <div class="register-content-wrapper">
                <h3>Register With Us Today !!</h3>
                <p>You can shortlist colleges as well as get recommended college lists based on your profile. So,
                    Register and enjoy the service for free.</p>
                <button class="register">REGISTER NOW</button>
            </div>
        </section>
        <?php include 'footer.php'; ?>
    </div>
</body>
<script src="js/main.js"></script>


</html>