<?php
    include 'dbconnection.php';

    $name = $email = $username = $number = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $username = test_input($_POST["uname"]);
    $number = test_input($_POST["number"]);
    $password = test_input($_POST["password"]);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $sql0 = "SELECT * FROM login_details WHERE Email='$email' OR UserName='$username'";
    $result = mysqli_query($conn, $sql0);

    if($result)
    {
        while($row = mysqli_fetch_assoc($result)) {
            if($row["UserName"] == $username)
            {
                echo "Username '" .$username. "' already exists!!!";
                die();
            }
            if($row["Email"] == $email)
            {
                echo "Email '" .$email. "' already exists!!!";
                die();
            }
        }
    }

    $sql = "INSERT INTO login_details VALUES ('','$name','$username','$email','$number','$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>


