<?php
session_start();
$servername = "localhost";
$database = "db_kemetul";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("koneksi gagal : " . mysqli_connect_error());
}
