<?php
    include 'dbconnection.php';

    $username= $_POST["userName"];
    // $email= $_POST["email"];
    $password= password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT UserName, Password FROM login_details WHERE UserName='$username'";
    $result= mysqli_query($conn, $sql);
        
    if(!$result) {
        echo "User doesn't exist!";
    } 
    else {
        
        $row=mysqli_fetch_assoc($result);
        
        if ($username==$row['UserName']) {
            if (password_verify($_POST["password"], $row['Password'])) {
                    echo "Success!";
            }
            else{
                echo "Credentials doesn't match.";
            }
        }    
    }
?>