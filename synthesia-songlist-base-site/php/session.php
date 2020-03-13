<?php
include_once "./config.php";
$conn = new mysqli($nameserver, $user, $password, $dbname)
    or die("Connect failed: %s\n" . $conn->error);
mysqli_set_charset($conn, 'utf8mb4');

session_start();

$user_check = $_SESSION['login_user'];
$query = "SELECT email FROM Users WHERE email='$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
