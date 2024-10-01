<?php
$servername = "localhost";  // Server database, default untuk XAMPP adalah localhost
$username = "root";         // Username default MySQL di XAMPP adalah root
$password = "";             // Password default MySQL di XAMPP adalah kosong (tanpa password)
$dbname = "backend";    // Nama database yang telah Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
