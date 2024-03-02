<?php
    session_start();
    if(isset($_SESSION['user'])){
        echo'
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
        ';

    }
    else{
        echo'Please Login';
    }
?>
