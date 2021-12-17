<?php
require_once("pagination/dbcontroller.php");
require_once("pagination/pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();

$sql = "SELECT * from colleges WHERE 1";

if(isset($_GET["college_type"]))
	{
		$college_type_filter = implode("','", $_GET["college_type"]);
		$query .= "
		 AND CType IN('".$college_type_filter."')
		";
	}
	if(isset($_GET["location"]))
	{
		$location_filter = implode("','", $_GET["location"]);
		$query .= "
		 AND CProvince IN('".$location_filter."')
		";
	}
	if(isset($_GET["university"]))
	{
		$university_filter = implode("','", $_GET["university"]);
		$query .= "
		 AND CAffiliated IN('".$university_filter."')
		";
	}

$paginationlink = "getresult.php?page=";	
$pagination_setting = $_GET["pagination_setting"];
				
$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;

$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
$faq = $db_handle->runQuery($query);

if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}

if($pagination_setting == "prev-next") {
	$perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
} else {
	$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
}


$output = '';

if($db_handle->numRows($query)>0){
	foreach($faq as $k=>$v) {
	$output .= '<div class="small-college-container">
	<h3><a href="college_view.php?item='.$faq[$k]["CID"].'">'.$faq[$k]["CName"].'</a></h3>
	<p>Address: '.$faq[$k]["CAddress"].', '.ucfirst($faq[$k]["CProvince"]).'</p>
	<p>Course: BSc. CSIT, '.$faq[$k]["CDuration"].' years, '.ucfirst($faq[$k]["CAffiliated"]).' University.</p>
	<p>'.$faq[$k]["CWebsite"].'</p>
	<p>'.$faq[$k]["CMail"].'</p>
</div>
<div class="college-options-wrapper">
	<button class="college-options"><a href="college_view.php?item='.$faq[$k]["CID"].'">View College</a></button>
	<button class="college-options"><a href="college_view.php?item='.$faq[$k]["CID"].'">Add to Wishlist</a></button>
</div><br>';
	}
	if(!empty($perpageresult)) {
	$output .= '<div id="pagination">' . $perpageresult . '</div>';
	}
}

print $output;
?>
