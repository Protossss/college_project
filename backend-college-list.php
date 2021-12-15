<?php
include 'dbconnection.php';

//define total number of results you want per page
$results_per_page = 2;

//find the total number of results stored in the database
$query = "select * from colleges WHERE 1";

if(isset($_POST["c_type"]))
	{
		$c_type = $_POST["brand"];
		$query .= "AND CType = '$c_type'";
	}
	if(isset($_POST["province"]))
	{
		$province_filter = $_POST["province"];
		$query .= "AND CProvince ='$province_filter'";
	}
	if(isset($_POST["uni"]))
	{
		$uni_filter = $_POST["uni"];
		$query .= "AND CAffiliated ='$uni_filter'";
	}
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
$query = "SELECT * FROM colleges LIMIT " . $page_first_result . ',' . $results_per_page;
$result = mysqli_query($conn, $query);

//display the retrieved result on the webpage
while ($row = mysqli_fetch_array($result)) {
    $id = $row['CID'];
    printf("<div class='small-college-container'>
                                    <h3>{$row['CName']}</h3><span>{$row['CType']}</span>
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
