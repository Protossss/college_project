<div id="main-container">
    <header class="top-nav">
        <div><a href="index.php">College Solutions</a></div>
        <!-- <div id="logo">College Solutions</div> -->
        <nav>
            <ul class="nav-links">
                <li><a href="browse.php">Browse</a></li>
                <li><a href="">Rankings</a></li>
                <?php
                if(isset($_SESSION["UserName"])){
                    
                    printf("<li>Hi, ".$_SESSION["UserName"]."</li>");
                }
                else{
                    echo '<li><a href="sign_in.php">Sign IN</a></li>';
                }
                ?>
                <li><i class="fa fa-bars"></i></li>
            </ul>
        </nav>

    </header>
</div>
