<?php

    function getAllProducts() {
        $serverhost = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "shop";

        // Create connection
        $connect = new mysqli($serverhost, $username, $password, $dbname);

        // Begin prepare statement
        $sql = "SELECT * FROM products";
        $result = mysqli_query($connect, $sql);

        return mysqli_fetch_all ($result, MYSQLI_ASSOC);
    }

    $results = getAllProducts();



?>