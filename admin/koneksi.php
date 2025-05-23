<?php

$koneksi = mysqli_connect("localhost", "root", "", "phpdasarv");

// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>