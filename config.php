<?php

    $host = "localhost"; 
    $dbname = "postgres"; 
    $user = "postgres"; 
    $password = "1234"; 
    $dsn = "pgsql:host=$host;dbname=$dbname;user=$user;password=$password";

    try 
    {
        $pdo = new PDO($dsn);
    } 
    catch (PDOException $e) 
    {
        die("Connection failed: " . $e->getMessage());
    }


?>