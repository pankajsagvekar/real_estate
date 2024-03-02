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
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="property/submitproperty.html">Submit Property</a></li>
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="home.php#aboutus">About Us</a></li>
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold" href="#">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link p-3 text-white fw-bold " href="../index.html">Logout</a></li>
            </nav>
        </div>
    </div>

    <?php
    include '../config.php';
        $query = 'SELECT * FROM property';
        echo "<table>";
        echo "<tr>
                <th>Property ID</th>
                <th>Property Type</th>
                <th>Property Price</th>
                <th>Property Category</th>
                <th>Property Image</th>
            </tr>";
        foreach($pdo->query($query) as $row){
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['ptype']."</td>
                    <td>".$row['pprice']."</td>
                    <td> ".$row['pcategory']."</td>";
            echo '<td>
            <img src="property/'.$row['pimage'].'" width=100 height=100>
                <td>';
            
        }
        echo "</table>";
    ?>
</body>

</html>