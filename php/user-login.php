
<?php
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if ($_POST)
    {
        if (empty($email)) {
            $_SESSION['msg'] = 'Enter your email';
        }
        elseif (empty($pass)) {
            $_SESSION['msg'] = 'Enter the password';
        }
        else{
            include_once 'dbconnection.php';
            $conn = connect();

            $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
            
            $result = $conn->query($sql);

            // print_r($result);
            // exit;
            
            if ($result->num_rows > 0) {
                foreach($result AS $row){
                    $_SESSION['User-name'] = $row['name'];
                }
                $_SESSION['loggedIn'] = true;
                $_SESSION['msg'] = 'You are logged in successfully';
            }
            else{
                $_SESSION['msg'] = 'Log in failed.<br> Please check the user information';
            }
        }
    }
    header('location:../login.php');
?>