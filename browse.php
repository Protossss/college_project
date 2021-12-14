<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main_style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<body>
    <?php include 'header.php';?>
    <section id="banner">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/banner-2.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/banner-1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>



            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/banner-3.jpg" style="width:100%">
                <div class="text">Caption Text</div>
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
        <div class="main-content-wrapper">
            <div class="left-column column">
                <h2>FILTER</h2>
                <form action="browse.php" method="POST" class="filter-form">
                    <div class="form-content">
                        <h3>College Type</h3>
                        <hr>
                        <input type="checkbox" value="private" id="private" name="college-type">
                        <label for="private">Private</label> <br>
                        <input type="checkbox" value="public" id="public" name="college-type">
                        <label for="public">Publice</label> <br>
                    </div>
                    <div class="form-content">
                        <h3>Location</h3>
                        <hr>
                        <select name="location" id="location">
                            <option value="all">All</option>
                            <option value="province 1">Province 1</option>
                            <option value="province 2">Province 2</option>
                            <option value="province 3">Province 3</option>
                            <option value="province 4">Province 4</option>
                            <option value="province 5">Province 5</option>
                            <option value="province 6">Province 6</option>
                            <option value="province 7">Province 7</option>
                        </select>
                    </div>
                    <div class="form-content">
                        <h3>Affiliated University</h3>
                        <hr>
                        <select name="university" id="university">
                            <option value="all">All</option>
                            <option value="tribhuvan">Tribhuvan University</option>
                            <option value="kathmandu">Kathmandu University</option>
                            <option value="pokhara">Pokhara University</option>
                            <option value="purbanchal">Purbanchal University</option>
                            <option value="midwestern">Mid Western University</option>
                        </select>
                    </div>
                    <div class="form-content">
                        <h3>Test Score</h3>
                        <hr>
                        <label for="see">SEE</label> <br>
                        <input type="number" value="" id="see" name="score"><br>
                        <label for="hs">High School</label> <br>
                        <input type="number" value="" id="hs" name="score">
                    </div>

                </form>
            </div>
            <div class="right-column column">
                <div class="column-contents">
                    <h2>COLLEGES</h2>
                    <div class="display-college-wrapper">
                        <?php
                        include 'dbconnection.php';

                        //define total number of results you want per page
                        $results_per_page = 2;

                        //find the total number of results stored in the database
                        $query = "select *from colleges";
                        $result = mysqli_query($conn, $query);
                        $number_of_result = mysqli_num_rows($result);

                        //determine the total number of pages available
                        $number_of_page = ceil($number_of_result / $results_per_page);

                        //determine which page number visitor is currently on
                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }

                        //determine the sql LIMIT starting number for the results on the displaying page
                        $page_first_result = ($page - 1) * $results_per_page;

                        //retrieve the selected results from database
                        $query = "SELECT *FROM colleges LIMIT " . $page_first_result . ',' . $results_per_page;
                        $result = mysqli_query($conn, $query);

                        //display the retrieved result on the webpage
                        while ($row = mysqli_fetch_array($result)) {
                           echo `"<h3>.$row['CName'].</h3>"
                                "<p>Address: $row['CAddress']</p>"
                                "<p>Course: BSc. CSIT, $row['CDuration'] years.</p>"
                                "<p>$row['CWebsite']</p>"
                                "<p>$row['CMail']</p>"`;
                            
                        }

                        //display the link of the pages in URL
                        for ($page = 1; $page <= $number_of_page; $page++) {
                            echo '<a href = "browse.php?page=' . $page . '">' . $page . ' </a>';
                        }

?>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </div>
</body>
<script src="js/main.js"></script>

</html>