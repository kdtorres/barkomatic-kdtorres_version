<?php
    $DB_SERVER = 'localhost';
    $DB_USERNAME = 'root'; 
    $DB_PASSWORD = '';
    $DB_NAME = 'vg_shippingdb';

    /* Attempt to connect to MySQL database */
    $conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    
    // check connection
    if(!$conn) {
        echo("ERROR: Could not connect." . mysqli_connect_error());  
    }
?>