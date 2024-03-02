<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Create Account | Real Estate Management</title>
    <link rel="stylesheet" href="../css/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="css/bootstrap5/js/bootstrap.min.js"></script>
</head>

<body class="bg-body-tertiary background">
    <div class="card text-center center-div">
        <h2 class="display-1 p-3 card-title">Create <br>Account</h2>
        <form action="create.php" method="POST" class="container">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com" required>
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label><br>
                <input type="submit" value="SignUp" class="btn btn-outline-success px-4"><br><br>
            </div>
        </form>
        <a href="../index.html"><span class="badge bg-success p-3 fs-6">Go To Login Page</span></a>
<?php
    include '../config.php';

    // Retrieve username and password from the login form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newusername = $_POST["username"];
        $newpassword = $_POST["password"];

        // Perform a simple query to validate the user
        $duplicate = "SELECT * FROM users WHERE username = '$newusername'";
        $result = $pdo->query($duplicate);

        if ($result->rowCount() == 1) {
            echo '
            <div class="container">
                    <p class=" bg-danger rounded-2 mt-4 mb-0  text-white p-2">Username Already Taken</h4>
            </div>
        ';
        } else {
            $query = "INSERT INTO users (username, password) VALUES ('$newusername', '$newpassword')";
            $result = $pdo->query($query);
            echo '
            <div class="container">
                    <p class="bg-secondary rounded-2 mt-4 mb-0  text-white p-2">Account Created</h4>
            </div>
        ';
        }
    }
        ?>
    </div>
</body>

</html>