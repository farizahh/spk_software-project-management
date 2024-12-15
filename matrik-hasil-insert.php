<?php
include 'include/conn.php';

// Tangkap data yang dikirimkan dari form
$id_alternatif = $_POST['id_alternatif'];
$id_kriteria = $_POST['id_kriteria'];
$value = $_POST['value'];

// Validasi data (contoh sederhana, sesuaikan dengan kebutuhan)
if (empty($id_alternatif) || empty($id_kriteria) || empty($value)) {
    // Jika ada data yang kosong, redirect kembali ke form dengan pesan error
    header("Location: matrik-hasil.php?error=Data tidak boleh kosong");
    exit();
}

// Query untuk menyimpan data ke dalam database
$sql = "INSERT INTO evaluasi (id_alternatif, id_kriteria, value) VALUES ('$id_alternatif', '$id_kriteria', '$value')";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    // Jika berhasil disimpan, redirect ke halaman matrik.php dengan pesan sukses
    header("Location: matrik-hasil.php?success=Data berhasil disimpan");
    exit();
} else {
    // Jika terjadi error, redirect kembali ke form dengan pesan error
    header("Location: matrik-hasil.php?error=Error: " . $conn->error);
    exit();
}

// Tutup koneksi database
$conn->close();
