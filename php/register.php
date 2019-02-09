

<?php
session_start();
if ($_POST && !empty($_POST['Username']) && !empty($_POST['email']) && !empty($_POST['pass'])){

    $userName = $_POST['Username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


include_once 'dbsetup.php';
dbSetup();
include_once 'dbconnection.php';
$conn = connect();

$sql = "SELECT * FROM users WHERE email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['msg'] = "User already exists in the system";
    
}
else{
    $sql = "INSERT INTO users (name, email, pass) VALUES ('$userName', '$email', '$pass')";

    $result = $conn->query($sql);
    $_SESSION['msg'] = "User Registration Successfully Completed";
}

}else
{
    $_SESSION['msg'] = "Please, Enter all the User registration fields.";
}
header("location:../signup.php");




?>