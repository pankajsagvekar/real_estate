<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap5/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<?php
include '../config.php';
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];

    $_SESSION['user'] = $username;
    $_SESSION['password'] = $password;
    
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $pdo->query($query);
    sleep(1);
    if ($result->rowCount() == 1) 
    {
        echo '
        <div class=" container text-center center-div">
            <h1 class="display-4">Login Successful</h1>
            <a class=" btn btn-outline-primary " href="../pages/home.php">Next</a>
        </div>
    ';
    } 
    else 
    {
        echo '
            <div class=" container text-center center-div">
                <h1 class="display-4">Invalid Username Or Password</h1>
                <a class=" btn btn-outline-danger " href="../index.html">Back</a>
            </div>
        ';
    }
?>

</body>
</html>


