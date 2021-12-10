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
    <div id="main-container">
        <!-- <header class="main-header">
                <div class="left-links">
                    <a href="#">College Solutions</a>
                </div>
                <nav class="right-links">
                    <li><a href="#">Browse</a></li>
                    <li><a href="#">Rankings</a></li>
                    <li><button class="sign-in">Sign In</button></li>
                    <li><button class="sign-up">GET STARTED</button></li>
                </nav>
                <a href="javascript:void(0);" id="icon" onclick="showMobileNav()">
                    <i class="fa fa-bars"></i>
                </a>
        </header> -->
        <header class="top-nav">
            <div id="logo">College Solutions</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="">Browse</a></li>
                    <li><a href="">Rankings</a></li>
                    <li><a id="sign-in">Sign IN</a></li>
                    <li><i class="fa fa-bars"></i></li>
                </ul>
            </nav>

        </header>
    </div>

    <!-- Dialog Log In form -->
    <div id="dialog-box" title="Sign in to your account">
        <form action="#">
            <div class="form-field">
                <label for="username">Email/Username</label><br>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-field">
                <label for="password">Password</label><br>
                <input type="text" name="password" id="passoword">
            </div>
            <!-- <input type="submit" tabindex="-1" style="position:absolute; top:-1000px"> -->
        </form>

    </div>

    <!-- end of Dialog Log In form -->



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
    <div id="second-container">
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
        <footer class="bottom-nav">
            <div class="about-us">
                <img src="#" alt="website logo">
                <p>We strive to deliver a level of service that exceeds the expectations of our customers.If you have
                    any questions about our products or services, please do not hesitate to contact us.We have friendly,
                    knowledgeable representatives available seven days a week to assist you.
                </p>
            </div>
            <div class="resources">
                <ul>
                    <li>
                        <h3>Useful Links</h3>
                    </li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="socials">
                <ul class="social-links">
                    <li>
                        <h3>Socials</h3>
                    </li>
                    <li>FaceBook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Discord</li>
                </ul>
            </div>
        </footer>
        <div class="copyright-info">©Copyright CollegeSolutions.Inc 2021</div>
    </div>
    <script src="js/main.js" defer></script>
</body>


</html>