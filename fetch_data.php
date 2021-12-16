<?php

//fetch_data.php

include 'dbconnection.php';

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM colleges WHERE 1
	";
	
	if(isset($_POST["college_type"]))
	{
		$college_type_filter = implode("','", $_POST["college_type"]);
		$query .= "
		 AND CType IN('".$college_type_filter."')
		";
	}
	if(isset($_POST["location"]))
	{
		$location_filter = implode("','", $_POST["location"]);
		$query .= "
		 AND CProvince IN('".$location_filter."')
		";
	}
	if(isset($_POST["university"]))
	{
		$university_filter = implode("','", $_POST["university"]);
		$query .= "
		 AND CAffiliated IN('".$university_filter."')
		";
	}

	//define total number of results you want per page
	$results_per_page = 4;

	$temp = mysqli_query($conn,$query);
	$total_row = mysqli_num_rows($temp);

	//determine the total number of pages available
	$number_of_page = ceil($total_row / $results_per_page);

	//determine which page number visitor is currently on
	if (!isset($_GET['page'])) {
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	//determine the sql LIMIT starting number for the results on the displaying page
	$page_first_result = ($page - 1) * $results_per_page;

	$query .= "LIMIT ". $page_first_result . ',' . $results_per_page;

	//QUERY WITH LIMIT
	$result = mysqli_query($conn,$query);
	$no_of_row = mysqli_num_rows($result);
	$output = '';
	if($no_of_row > 0)
	{
		while ($row = mysqli_fetch_array($result))
		{
			$output .= '
					<div class="small-college-container">
                        <h3><a href="college_view.php?item='.$row["CID"].'">'.$row["CName"].'</a></h3>
                        <p>Address: '.$row["CAddress"].', '.ucfirst($row["CProvince"]).'</p>
                        <p>Course: BSc. CSIT, '.$row["CDuration"].' years, '.ucfirst($row["CAffiliated"]).' University.</p><p>'.$row["CWebsite"].'</p>
                        <p>'.$row["CMail"].'</p>
                    </div>
                    <div class="college-options-wrapper">
                            <button class="college-options"><a href="college_view.php?item='.$row["CID"].'">View College</a></button>
                            <button class="college-options"><a href="college_view.php?item='.$row["CID"].'">Add to Wishlist</a></button>
                    </div><br>
			';
		}
		for ($page = 1; $page <= $number_of_page; $page++) {
			$output .= '<button class="page-number"><a href = "browse.php?page=' . $page . '">' . $page . ' </a></button>';
		}


	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>