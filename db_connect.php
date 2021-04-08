<?php
    $connection = mysqli_connect("localhost", "root", "", "miniproject");
    if(!$connection){
        die("Could not connect to database");
    }
?>