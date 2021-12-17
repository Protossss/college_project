<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
    <link rel="stylesheet" href="css/main_style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <style>
    .link {
        padding: 10px 15px;
        background: transparent;
        border: #bccfd8 1px solid;
        border-left: 0px;
        cursor: pointer;
        color: #607d8b
    }

    .disabled {
        cursor: not-allowed;
        color: #bccfd8;
    }

    .current {
        background: #bccfd8;
    }

    .first {
        border-left: #bccfd8 1px solid;
    }

    .question {
        font-weight: bold;
    }

    .answer {
        padding-top: 10px;
    }

    #pagination {
        margin-top: 20px;
        padding-top: 30px;
        border-top: #F0F0F0 1px solid;
    }

    .dot {
        padding: 10px 15px;
        background: transparent;
        border-right: #bccfd8 1px solid;
    }

    #overlay {
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 999;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: none;
    }

    #overlay div {
        position: absolute;
        left: 50%;
        top: 50%;
        margin-top: -32px;
        margin-left: -32px;
    }

    .page-content {
        padding: 20px;
        margin: 0 auto;
    }

    .pagination-setting {
        padding: 10px;
        margin: 5px 0px 10px;
        border: #bccfd8 1px solid;
        color: #607d8b;
    }
    </style>
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
                        <input type="checkbox" value="private" id="private" class="college_type common_selector"
                            name="college-type">
                        <label for="private">Private</label> <br>
                        <input type="checkbox" value="public" id="public" class="college_type common_selector"
                            name="college-type">
                        <label for="public">Public</label> <br>
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
                    <div class="filter_data">
                        <div id="pagination-result">
                            <input type="hidden" name="rowcount" id="rowcount" />
                        </div>
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
        getresult("getresult.php");

        function getresult(url) {

            var action = 'getresult';
            var college_type = get_filter('college_type');
            var location = get_filter('location');
            var university = get_filter('university');

            $.ajax({
                url: url,
                method: "GET",
                data: {
                    action: action,
                    college_type: college_type,
                    location: location,
                    university: university,
                    rowcount: $("#rowcount").val(),
                    "pagination_setting": "all-links"
                },
                success: function(data) {
                    alert(location);
                    // $('.filter_data').html(data);

                    $("#pagination-result").html(data);
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
    <script>
    getresult("getresult.php");
    </script>
</body>
<script src="js/main.js"></script>


</html>