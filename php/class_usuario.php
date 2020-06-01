<?php 
    $servername = "localhost";
    $database = "proyecto";
    $username = "root";
    $password = "root";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo('sa conectao mu bien');
   
    mysqli_close($conn);
?>