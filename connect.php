<?php
// File ini digunakan untuk mengatur koneksi database
$servername = "localhost"; // Ganti sesuai konfigurasi server
$username = "root";        // Ganti sesuai konfigurasi server
$password = "";            // Ganti sesuai konfigurasi server
$dbname = "restaurant"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
