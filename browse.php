<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
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
                    <div class="filter-form-content">
                        <h3>College Type</h3>
                        <hr>
                        <input type="checkbox" value="private" id="private" class="college-type common_selector"
                            name="college-type">
                        <label for="private">Private</label> <br>
                        <input type="checkbox" value="public" id="public" class="college-type common_selector"
                            name="college-type">
                        <label for="public">Publice</label> <br>
                    </div>
                    <div class="form-content">
                        <h3>Location</h3>
                        <hr>
                        <input type="checkbox" value="province 1" class="location common_selector" name="locations">
                        <label for="locations">Province 1</label> <br>
                        <input type="checkbox" value="province 2" class="location common_selector" name="locations">
                        <label for="locations">Province 2</label> <br>
                        <input type="checkbox" value="province 3" class="location common_selector" name="locations">
                        <label for="locations">Province 3</label> <br>
                        <input type="checkbox" value="province 4" class="location common_selector" name="locations">
                        <label for="locations">Province 4</label> <br>
                        <input type="checkbox" value="province 5" class="location common_selector" name="locations">
                        <label for="locations">Province 5</label> <br>
                        <input type="checkbox" value="province 6" class="location common_selector" name="locations">
                        <label for="locations">Province 6</label> <br>
                        <input type="checkbox" value="province 7" class="location common_selector" name="locations">
                        <label for="locations">Province 7</label> <br>

                    </div>
                    <div class="form-content">
                        <h3>Affiliated University</h3>
                        <hr>
                        <input type="checkbox" value="tribhuvan" class="university common_selector" name="universitys">
                        <label for="universitys">Tribhuvan University</label> <br>
                        <input type="checkbox" value="kathmandu" class="university common_selector" name="universitys">
                        <label for="universitys">Kathmandu University</label> <br>
                        <input type="checkbox" value="pokhara" class="university common_selector" name="universitys">
                        <label for="universitys">Pokhara University</label> <br>
                        <input type="checkbox" value="purbanchal" class="university common_selector" name="universitys">
                        <label for="universitys">Purbanchal University</label> <br>
                        <input type="checkbox" value="midwestern" class="university common_selector" name="universitys">
                        <label for="universitys">Mid Western University</label> <br>
                    </div>

                </form>
            </div>
            <div class="right-column column">
                <div class="column-contents">
                    <h2>COLLEGES</h2><br>
                    <div class="search-box-container">
                        <div class="search-box">
                            <input id="search" type="text" autocomplete="off" placeholder="Search Colleges..." />
                            <div class="result"></div>
                        </div>

                    </div>
                    <div class="filter-data">
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
                                $id = $row['CID'];
                                printf ("<div class='small-college-container'>
                                    <h3>{$row['CName']}</h3>
                                    <p>Address: {$row['CAddress']}</p>
                                    <p>Course: BSc. CSIT, {$row['CDuration']} years.</p><p>{$row['CWebsite']}</p>
                                    <p>{$row['CMail']}</p>
                                </div>
                                <div class='college-options-wrapper'>
                                    <button class='college-options'><a href='college_view.php?item={$id}'>View College</a></button>
                                    <button class='college-options'><a href='college_view.php?item={$id}'>Add to Wishlist</a></button>
                                </div><br>
                                ");
                            }

                            //display the link of the pages in URL
                            for ($page = 1; $page <= $number_of_page; $page++) {
                                echo '<button class="page-number"><a href = "browse.php?page=' . $page . '">' . $page . ' </a></button>';
                            }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </div>
    <script>

    $(document).ready(function() {

        $('.search-box input[type="text"]').on("keyup input", function() {
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("backend-search.php", {
                    term: inputVal
                }).done(function(data) {
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        // Redirect to college view onclick of results
        $(document).on("click", ".result p", function() {
            var itemVal = $(this).attr("id");

            window.location.href = "college_view.php?item=" + itemVal;
        });

        //College Filter jQuery
        filter_data();

        function filter_data() {
            $('.filter_data').html('<div id="loading" style="" ></div>');
            var action = 'fetch_data';
            var college-type = get_filter('college-type');
            var location = get_filter('location');
            var university = get_filter('university');
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: {
                    action: action,
                    college-type: college-type,
                    location: location,
                    university: university
                },
                success: function(data) {
                    $('.filter_data').html(data);
                }
            });
        }

        function get_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function() {
            filter_data();
        });
        
       

    });



    </script>
</body>
<script src="js/main.js"></script>


</html>