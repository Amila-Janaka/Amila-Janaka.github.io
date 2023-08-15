<?php
require_once './dbc.php';

$userName = $_POST["userName"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO members VALUES('$userName' , '$email', '$password')";
$result = mysqli_query($connnect, $sql);

if ($result) {
    echo "<script>alert('You have successfully register')</script>";
    require_once './signup.php';
} else {
    echo "<script>alert('You have un-successfully register')</script>";
    require_once './signup.php';
}
?>