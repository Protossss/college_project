<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/main_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="tabs-container">
        <div id="log_in_tabs">
            <ul>
                <li><a href="#sign_in">Sign In</a></li>
                <li><a href="#sign_up">Register</a></li>
            </ul>
            <div id="sign_in">
                <form action="check_user.php" method="POST" id="sign_in_form">
                    
                    <div class="form-element">
                        <label for="userName">Username / E-mail</label><br>
                        <input type="text" name="userName" id="userName">
                    </div>
                    <div class="form-element">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password">
                    </div>
                    <div>
                        <input type="submit" name="sign_in" value="Sign In">
                    </div>
                    <br>
                </form>
            </div>
            <div id="sign_up">
                
                <form action="register_submit.php" method="POST" id="register_form">
                    <div class="form-element">
                        <label for="name">Name</label><br>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="form-element">
                        <label for="email">E-mail</label><br>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-element">
                        <label for="number">Contact No.</label><br>
                        <input type="number" name="number" id="number">
                    </div>
                    <div class="form-element">
                        <label for="uname">Username</label><br>
                        <input type="uname" name="uname" id="uname">
                    </div>
                    <div class="form-element">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="form-element">
                        <label for="password1">Confirm Password</label><br>
                        <input type="password" name="password1" id="password1">
                    </div>
                    <div>
                        <input type="submit" value="REGISTER">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="body-container">
        <?php include 'footer.php'; ?>
    </div>
    <script src="js/jquery-use.js"></script>

</body>

</html>