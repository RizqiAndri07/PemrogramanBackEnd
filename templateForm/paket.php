<?php
// Menghubungkan ke database
include('koneksi.php');

// Mengecek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Mengambil data dari form
    $nama_paket = $_POST['namaPaket'];
    $destinasi = $_POST['destinasi'];
    $kelas = $_POST['kelas'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['comments'];  // Nama field yang Anda buat untuk deskripsi

    // SQL untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO paket (nama_paket, destinasi, kelas, harga, deskripsi) 
            VALUES ('$nama_paket', '$destinasi', '$kelas', '$harga', '$deskripsi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
