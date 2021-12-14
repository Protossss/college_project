<!-- PHP code to insert college data -->
<?php
include 'dbconnection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname = test_input($_POST["cname"]);
    $caffiliated = test_input($_POST["caffiliated"]);
    $address = test_input($_POST["address"]);
    $province = test_input($_POST["province"]);
    $cduration = test_input($_POST["cduration"]);
    $cfees = test_input($_POST["cfees"]);
    $cwebsite = test_input($_POST["cwebsite"]);
    $ccontact = test_input($_POST["ccontact"]);
    $cmail = test_input($_POST["cmail"]);
    $type = test_input($_POST["type"]);
    $about = test_input($_POST["about"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "INSERT INTO colleges VALUES ('','$cname','$caffiliated','$address','$province','$cduration','$cfees','$cwebsite','$ccontact','$cmail','$type','$about')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

<!--End of PHP code to insert college data -->