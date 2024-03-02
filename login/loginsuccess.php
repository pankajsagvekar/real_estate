<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap5/css/bootstrap.min.css">
    <title>Login Successfult</title>
</head>
<body>
     <form method="post" action="loginsuccess.php" class="center-div text-center">
        <h1 class="display-1 ">Login Success</h1>
        <input type="submit" value="Next" class="btn btn-outline-success ">
    </form>
</body>
</html>

<?php

    ob_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        sleep(1);
        header("Location: ../pages/home.php");
    }
?>