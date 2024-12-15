<?php
// Sertakan file koneksi
include 'include/conn.php';

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai input
    $nama_alternatif = $_POST['nama'];

    // Query untuk insert data ke database
    $sql = "INSERT INTO alternatif (nama) VALUES ('$nama_alternatif')";

    // Jalankan query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href='alternatif.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
