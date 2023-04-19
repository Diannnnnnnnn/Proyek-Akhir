<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "sistempenilaian";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal Terhubung.')</script>");
}

?>
