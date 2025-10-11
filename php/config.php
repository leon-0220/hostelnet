<?php
$host = "trolley.proxy.rlwy.net";
$user = "root";
$pass = "HdmIDiTCnwbfpVfzujxZEfTmhgGkbnlA"; 
$db = "railway db1";
$port = "28476";

$conn = mysqli_connect($servername, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}

?>
