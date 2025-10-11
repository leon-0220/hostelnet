<?php
session_start();
include '../php/config/db_connect.php'; // adjust ikut lokasi fail

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            switch ($row['role']) {
                case 'student':
                    header("Location: pages/student/dashboard.php");
                    break;
                case 'warden':
                    header("Location: pages/warden/dashboard.php");
                    break;
                case 'admin':
                    header("Location: pages/admin/dashboard.php");
                    break;
                case 'finance':
                    header("Location: pages/finance/dashboard.php");
                    break;
                case 'maintenance':
                    header("Location: pages/maintenance/dashboard.php");
                    break;
                default:
                    header("Location: index.html");
            }
            exit();
        } else {
            echo "<script>alert('Wrong password!'); window.location.href = '../index.html';</script>";
        }
    } else {
        echo "<script>alert('User not found. Please register first.'); window.location.href = '../register.html';</script>";
    }
}
?>

