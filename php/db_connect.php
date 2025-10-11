<?php
    $host = "trolley.proxy.rlwy.net";
    $username = "root";
    $pass = "HdmIDiTCnwbfpVfzujxZEfTmhgGkbnlA";
    $db = "railway db1";
    $port = 28476;

    $conn = new mysqli($host, $username, $pass, $db, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
    die("DATABASE_URL not set");
}
?>