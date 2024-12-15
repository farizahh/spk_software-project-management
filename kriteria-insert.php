<?php
// Sertakan file koneksi
include 'include/conn.php';

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai input
    $nama_kriteria = $_POST['nama'];
    $bobot = $_POST['bobot'];
    $atribut = $_POST['atribut'];


    // Query untuk insert data ke database
    $sql = "INSERT INTO kriteria (nama, bobot, atribut) VALUES ('$nama_kriteria', '$bobot', '$atribut')";

    // Jalankan query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href='kriteria.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
