<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "threebrotherlaw";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error) {
    die("keneksi gagal bang: " . $conn->connect_error);
}

?>