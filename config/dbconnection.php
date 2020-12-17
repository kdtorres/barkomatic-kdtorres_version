<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "vg_shippingdb";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    // check connection
    if(!$conn) {
        echo("Connection failed: " . mysqli_connect_error());  
    }
?>