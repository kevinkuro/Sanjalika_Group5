<?php
    $host = "localhost";

    $username = "root";

    $password = "";

    $dbname = "webbanhang";

    $con = mysqli_connect($host, $username, $password);
    mysqli_select_db($con, $dbname);
    mysqli_query($con, "SET NAMES 'utf8'");