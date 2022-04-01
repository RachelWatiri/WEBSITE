<?php

$servername = "localhost";
$username = "Username_Email";
$password = "";
$dbname = "testdb";

$email = $_POST["email"];
$password1 = $_POST["pwd"];
$password2 = $_POST["rpt-pwd"];
$first_name = $_POST["fn"];
$family_name = $_POST["fyn"];
$gender = $_POST["g"];
$county= $_POST["c"];
$country = $_POST["cy"];
$password_err = "";
$repeat_password_err = "";

//start

// Validate password
    if(empty(trim($_POST["pwd"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["pwd"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["pwd"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["rpt-pwd"]))){
        $repeat_password_err = "Please confirm password.";     
    } else{
        $repeatpassword = trim($_POST["rpt-pwd"]);
        if(empty($password_err) && ($password != $repeatpassword)){
            $repeat_password_err = "Password did not match.";
        }
    }

// Create connection
    if(empty($password_err) && empty($repeat_password_err)){
$conn = mysqli_connect("localhost", "username email", "", "testdb");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO watiri (Username_Email,Password1,Password2,First_Name,Family_Name,Gender,County,Country,Time)
VALUES ('$Username_Email','$Password1','$Password2','$First_Name','$Family_Name','$Gender','$County','$Country','$Time')";

if (mysqli_query($conn, $sql)) {
    echo "Signed up successfully";
     header("location:signIn.html");
 } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}else{
    if(!empty($password_err)){
    echo $password_err;
} else if(!empty($repeat_password_err)){
    echo $repeat_password_err;
}
}


//end

?>
