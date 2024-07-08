<?php
    $connection = new mysqli("localhost","root"," ","lebawi_database");
    if ($connection->connect_error) {
        die("connection Faild".$connection->connect_error);
    }
?>