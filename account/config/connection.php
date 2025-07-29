<?php
// Database Configuration
    $conn = mysqli_connect("localhost", "root", "", "oouhostel_db");
    if (!($conn)){
        echo "Failed to connect to the database";
    }
?>