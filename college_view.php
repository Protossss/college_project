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
    <?php
        include 'dbconnection.php';

        if(isset($_GET['item'])){
            $id = $_GET['item'];

            $sql = "SELECT * FROM colleges WHERE CID='$id'";
            $result= mysqli_query($conn, $sql);
                
            if(!$result) {
                echo "No such college entry found!";
            } 
            else {
                while($row = mysqli_fetch_assoc($result)) {
                    $cid = $row['CID'];
                    $cname = $row['CName'];
                    $caffiliated = $row['CAffiliated'];
                    $caddress = $row['CAddress'];
                    $cprovince = $row['CAddress'];
                    $cduration = $row['CDuration'];
                    $cfees = $row['CFees'];
                    $cwebsite = $row['CWebsite'];
                    $ccontact = $row['CContact'];
                    $cmail = $row['CMail'];
                    $ctype = $row['CType'];
                    $about = $row['About'];
                }
            }
        }
    ?>
    <?php include 'header.php'; ?>
    <section id="college-view-banner">
        <div><img src="images/college_img.jpg" alt="college image"></div>
        <div class="college-info">
            <h2></h2>
        </div>
    </section>
    <div id="body-container">
        <div class="main-content-wrapper">
            <div class="left-column column">
                <ul class="college-features">
                    <li><a href="#about">About</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#majors">Majors</a></li>
                    <li><a href="#scholarship">Scholarship</a></li>
                    <li><a href="#review">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="right-column column">
                <div class="wrapper" id="about">
                    <?php
                        if(isset($_GET['item'])){
                            echo $about;
                        }
                        else{
                            echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.";
                        }
                    ?>
                </div>
                <div class="wrapper" id="courses">
                    BSC. CSIT(Computer Science and Information Technology)
                </div>
                <div class="wrapper" id="majors">
                    CS(Computer Science)
                </div>
                <div class="wrapper" id="scholarship">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </div>
                <div class="wrapper" id="review">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </div>
                
                <div class="wrapper" id="contact">
                <?php
                        if(isset($_GET['item'])){
                            printf("
                                <p>Phone: {$ccontact}</p>
                                <p>Website: <a href='$ccontact'>$ccontact</a></p>
                                <p>E-mail: {$cmail}</p>
                            ");
                        }
                        else{
                            echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.";
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>