<?php  
    session_start();
    if(isset($_SESSION['user'])){
        echo '
        <!DOCTYPE html>
        <html lang="en">
    
        <head>
            <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
            <title>Real Estate Management</title>
            <link rel="stylesheet" href="../css/bootstrap5/css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/styles.css">
            <script src="../css/bootstrap5/js/bootstrap.min.js"></script>
        </head>
    
        <body>
            <div class="container-fluid p-0">
                <div class="together bg-danger">
                    <h4 class="text-center p-3 fs-1 mb-0 text-white">Real Estate Management</h4>
                    <nav class="nav nav-underline pe-4 font-size">
                        <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="home.php#textdesc">Home</a></li>
                        <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="#">Properties</a></li>
                        <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="property/submitproperty.php">Submit Property</a></li>
                        <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="home.php#aboutus">About Us</a></li>
                        <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="#">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link p-3 text-white fw-bold " href="../pages/logout.php">Logout</a></li>
                    </nav>
                </div>
            </div>
        ';

        include '../config.php';
        $query = 'SELECT * FROM property;';
        echo '<div class="row row-cols-1 row-cols-md-3 g-4 m-auto">';
        foreach($pdo->query($query) as $row){
            echo '
            <div class="col">
                <div class="card">
                    <img src="property/'.$row['pimage'].'" class="card-img-top pcard" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-outline-danger">Contact</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Property ID: '.$row['id'].'</li>
                        <li class="list-group-item">Property Type: '.$row['ptype'].'</li>
                        <li class="list-group-item">Property Price: &#8377 '.number_format($row['pprice']).'</li>
                        <li class="list-group-item">Property Category: '.$row['pcategory'].'</li>
                    </ul>
                </div>
            </div>
            <br>
                ';
        }    
        echo '</div>';
    }
    else{
        echo '
        <head>
            <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
            <title>Please Login</title>
            <link rel="stylesheet" href="../css/bootstrap5/css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/styles.css">
            <script src="css/bootstrap5/js/bootstrap.min.js"></script>
        </head>
        <div class=" container text-center center-div">
            <h1 class="display-4">Please Login </h1>
            <a class=" btn btn-outline-danger " href="../index.html">Back</a>
        </div>
        ';
    }
?>
</body>

</html>