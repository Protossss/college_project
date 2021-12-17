<?php
session_start();
if(!isset($_SESSION["UserName"])){
    header("location: sign_in.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Colleges</title>
    <link rel="stylesheet" href="css/main_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
</head>
<body>

    <?php include 'header.php'; ?>

    <div id="body-container">
        <div class="main-content-wrapper">
            <div class="left-column column">
                <ul class="nav">
                    <li><a> Dashboard</a></li>
                    <li><a href="profile_details.php"></i> Profile</a></li>
                    <li><a href="my_wishlist.php"><a>My Wish List</a></li>
                    <li><a href="recommended_list.php">Recommended Colleges</a></li>
                    <li><a href="logout.php">Logout</a></li>

                </ul>
            </div>
            <div class="right-column column">
                <div class="dashboard-content">
                    <div class="content-box-header">
                        <p class="panel-title"><?php echo $_SESSION["UserName"];?></p>
                    </div>
                    <div class="content-box-large box-with-header">
                        <p><img src="images/fr-05.jpg" class="img-circle" width="80"></p>
                        <p><b></b></p>
                        <div class="row" style="padding:0px;">
                            <div class="col-md-6">
                                <p class="small mt">MEMBER SINCE</p>
                                <p>2012</p>
                            </div>
                            <div class="col-md-6">
                                <p class="small mt">COLLEGES LIKED </p>
                                <p>4</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-content">
                    <div class="content-box-header">
                        <p class="panel-title">My WishList</p>
                    </div>
                    <div class="content-box-large box-with-header">
                        <p><img src="images/icons/wishlist.png" class="img-circle" width="80"></p>
                        <p><b>Wishlisted Colleges :</b></p>
                        <div class="row" style="padding:0px;">
                            <div class="col-md-6">
                                <p><a href="my_wishlist.php" class="btn btn-default btn-md">VIEW</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-content">
                    <div class="content-box-header panel-heading">
                        <p class="panel-title ">Description Of User</p>
                    </div>
                    <div class="content-box-large box-with-header" style="font-size: medium;">
                        Looking Forward For seeking an admisssion in a good college and excelling in my field of
                        interest .
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>