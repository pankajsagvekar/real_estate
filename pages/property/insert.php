<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">
    <title>Real Estate Management</title>
    <link rel="stylesheet" href="../../css/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="../../css/bootstrap5/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="together bg-danger">
            <h4 class="text-center p-3 fs-1 mb-0 text-white">Real Estate Management</h4>
            <nav class="nav nav-underline pe-4 font-size">
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="../home.php#textdesc">Home</a></li>
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="../properties.php">Properties</a></li>
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="submitproperty.html">Submit Property</a></li>
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="../home.php#aboutus">About Us</a></li>
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="#">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold " href="#">Logout</a></li>
            </nav>
        </div>
    </div>
    <?php

    if (isset($_POST['submit'])) {
        include '../../config.php';

        $property_type = $_POST['type'];
        $property_price = $_POST['Pprice'];
        $property_image = $_FILES['Pimage'];
        $property_category = $_POST['category'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
        $img_dest = "uploaded/" . $image_name;


        move_uploaded_file($image_loc, $img_dest); //moving uploaded img to your file

        //insert product
        $query = "INSERT INTO property (ptype, pprice, pimage, pcategory) 
                       VALUES ('$property_type', '$property_price','$img_dest','$property_category');";
        $result = $pdo->query($query);

        if ($result) {
            echo '
            <div class="container text-center mt-5">
                <h1>Your Property Has Been Submitted</h1>
                <a class="btn btn-outline-info fw-bold mt-4" href="../properties.php">View Property</a>
            </div>
            ';
        } else {
            echo '
            <h1 class="text-center mt-5">Something Went Wrong</h1>
            ';
        }
    }
    ?>

</body>

</html>