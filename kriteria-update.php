<?php
include 'include/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // // Debugging: cek nilai atribut yang diterima
    // echo 'Atribut: ' . $_POST['atribut'];  // Menampilkan nilai atribut untuk debugging
    // exit(); // Untuk menghentikan eksekusi kode agar Anda bisa melihat output

    // Tangkap data dari form
    $id = $_POST['id']; // Sesuai dengan input hidden pada form
    $nama = $_POST['nama'];
    $bobot = $_POST['bobot'];
    $atribut = $_POST['atribut'];

    if (!in_array($atribut, ['benefit', 'cost'])) {
        die("Error: Data atribut tidak valid.");
    }


    // Query untuk update data
    $sql = "UPDATE kriteria SET nama='$nama', bobot='$bobot', atribut='$atribut' WHERE id_kriteria='$id'";
    if ($conn->query($sql) === TRUE) {
        // Redirect jika sukses
        echo "<script>alert('Data berhasil diupdate');</script>";
        echo "<script>window.location.href='kriteria.php';</script>";
        exit();
    } else {
        // Tampilkan error jika gagal
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
