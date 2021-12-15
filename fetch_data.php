<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM product WHERE 1
	";
	
	if(isset($_POST["college-type"]))
	{
		$college_type_filter = implode("','", $_POST["college-type"]);
		$query .= "
		 AND product_brand IN('".$college_type_filter."')
		";
	}
	if(isset($_POST["location"]))
	{
		$location_filter = implode("','", $_POST["location"]);
		$query .= "
		 AND product_ram IN('".$location_filter."')
		";
	}
	if(isset($_POST["university"]))
	{
		$university_filter = implode("','", $_POST["university"]);
		$query .= "
		 AND product_storage IN('".$university_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="small-college-container">
                        <h3>{$row["CName"]}</h3>
                        <p>Address: {$row["CAddress"]}</p>
                        <p>Course: BSc. CSIT, {$row["CDuration"]} years.</p><p>{$row["CWebsite"]}</p>
                        <p>{$row["CMail"]}</p>
                        </div>
                        <div class="college-options-wrapper">
                            <button class="college-options"><a href="college_view.php?item={$id}">View College</a></button>
                            <button class="college-options"><a href="college_view.php?item={$id}">Add to Wishlist</a></button>
                        </div><br>';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>
<!-- <div class='small-college-container'>
    <h3>{$row['CName']}</h3>
    <p>Address: {$row['CAddress']}</p>
    <p>Course: BSc. CSIT, {$row['CDuration']} years.</p>
    <p>{$row['CWebsite']}</p>
    <p>{$row['CMail']}</p>
</div>
<div class='college-options-wrapper'>
    <button class='college-options'><a href='college_view.php?item={$id}'>View College</a></button>
    <button class='college-options'><a href='college_view.php?item={$id}'>Add to Wishlist</a></button>
</div><br>"; -->