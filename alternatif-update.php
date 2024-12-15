<?php
include 'include/conn.php';

$nama = $_POST['nama'];

$sql = "UPDATE alternatif SET nama='$nama' WHERE id_alternatif='$id'";
$result = $conn->query($sql);
header("location:alternatif.php");
