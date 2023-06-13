<?php
require 'koneksi.php' ;
$id = $_POST["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO admin (id, username, email, password) 
            VALUES ('$id', '$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
