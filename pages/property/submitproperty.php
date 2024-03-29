<?php
    session_start();
    if(isset($_SESSION['user'])){
        echo '
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
                            <li class="nav-item"><a class="nav-link p-3 text-white fw-bold " href="../logout.php">Logout</a></li>
                    </nav>
                </div>
        </div>

            <div class="conatainer">
                <div class="row m-auto">
                    <div class="col-md-6 border m-auto border-primary mt-5 border-2 p-3">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <p class=" text-center fw-bold fs-3 text-danger">Submit Property Details: </p>
                            <div class="mb-3">
                                <label class="form-label">Select Type</label>
                                <select class="form-select" name="type" required>
                                    <option value="Home">Default</option>
                                    <option value="rent">Rent</option>
                                    <option value="sell">Sell</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Property Price / Rent</label>
                                <input type="number" class="form-control" placeholder="Enter Property Price" name="Pprice" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Add Property Image</label>
                                <input type="file" class="form-control" placeholder="Enter Product Price" name="Pimage" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Property Category</label>
                                <select class="form-select" name="category" required>
                                    <option value="Home">Default</option>
                                    <option value="bunglow">Bunglow</option>
                                    <option value="flat">Flat</option>
                                    <option value="row_house">Row House</option>
                                </select>
                                <button class="fs-4 fw-bold my-3 form-control text-white btn btn-danger" name="submit">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
        </html>
    ';
    }
    else{
        echo '
        <head>
            <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
            <title>Please Login</title>
            <link rel="stylesheet" href="../../css/bootstrap5/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../css/styles.css">
            <script src="../../css/bootstrap5/js/bootstrap.min.js"></script>
        </head>
        <div class=" container text-center center-div">
            <h1 class="display-4">Please Login </h1>
            <a class=" btn btn-outline-danger " href="../../index.html">Back</a>
        </div>
        ';
    }
?>