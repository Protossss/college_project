<?php
    session_start();
    include 'dbconnection.php';

    $username= $_POST["userName"];
    // $email= $_POST["email"];
    $password= password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT ID, UserName, Password FROM login_details WHERE UserName='$username'";
    $result= mysqli_query($conn, $sql);
        
    if(!$result) {
        echo "User doesn't exist!";
    } 
    else {
        
        $row=mysqli_fetch_assoc($result);
        
        if ($username==$row['UserName']) {
            if (password_verify($_POST["password"], $row['Password'])) {
                    $_SESSION["id"]= $row['ID'];
                    $_SESSION["UserName"]= $row['UserName'];
                    header("location: user_dashboard.php");
            }
            else{
                $msg= "Password doesn't match.";
                header("location: sign_in.php?pMsg=".$msg);
            }
        }   
        else{
            $msg= "Username doesn't match.";
            header("location: sign_in.php?uMsg=".$msg);
        } 
    }
?>