<?php
$host = "mainline.proxy.rlwy.net";
$user = "root";
$pass = "TXxFspcFHvInuOcbERQyMAqiZFlRaOUd"; 
$db = "railway db";
$port = "44574";

$conn = mysqli_connect($servername, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}
?>