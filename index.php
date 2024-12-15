<?php
include 'include/conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body class="bg-[#f2f7ff]">
    <?php include "layout/sidebar.php"; ?>

    <div class="p-4 sm:ml-72 mt-4">
        <h1 class="text-3xl font-semibold">Dashboard</h1>


        <div class="mt-10 p-6 bg-gray-50 border border-gray-200 rounded-lg shadow">
            <h1 class="font-semibold text-xl mt-3 mb-10">Sistem Pendukung Keputusan Pemilihan Software Management Terbaik</h1>
            <div class="flex gap-10">
                <?php
                // Query untuk menghitung jumlah pegawai
                $query_total_kriteria = "SELECT COUNT(*) AS total FROM kriteria";
                $result_total = mysqli_query($conn, $query_total_kriteria);

                // Ambil hasil dari query
                $total_kriteria = 0;
                if ($result_total) {
                    $row_total = mysqli_fetch_assoc($result_total);
                    $total_kriteria = $row_total['total'];
                }
                // mysqli_close($koneksi);
                ?>
                <div class="mb-10 w-72">
                    <a href="kriteria.php" class="h-36 flex justify-center rounded-lg flex py-8 block max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100">
                        <div class="text-black">
                            <h1 class="text-6xl font-semibold"><?php echo $total_kriteria; ?></h1>
                            <p> Kriteria</p>
                        </div>
                        <div class="ml-10">
                            <i class="fa-solid fa-file-invoice text-black/50 text-8xl"></i>
                        </div>
                    </a>
                </div>

                <?php
                // Query untuk menghitung jumlah pegawai
                $query_total_alternatif = "SELECT COUNT(*) AS total FROM alternatif";
                $result_total = mysqli_query($conn, $query_total_alternatif);

                // Ambil hasil dari query
                $total_alternatif = 0;
                if ($result_total) {
                    $row_total = mysqli_fetch_assoc($result_total);
                    $total_alternatif = $row_total['total'];
                }
                // mysqli_close($koneksi);
                ?>
                <div class="mb-10 w-72">
                    <a href="alternatif.php" class="h-36 flex justify-center rounded-lg flex py-8 block max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100">
                        <div class="text-black">
                            <h1 class="text-6xl font-semibold"><?php echo $total_alternatif; ?></h1>
                            <p> Alternatif</p>
                        </div>
                        <div class="ml-10">
                            <i class="fa-solid fa-file-invoice text-black/50 text-8xl"></i>
                        </div>
                    </a>
                </div>

                <div class="mb-10 w-72">
                    <div class="h-36 flex justify-center rounded-lg flex py-8 block max-w-sm bg-white border border-gray-200 shadow hover:bg-gray-100">
                        <div class="text-black">
                            <h1 class="text-6xl font-semibold">2</h1>
                            <p> Skenario</p>
                        </div>
                        <div class="ml-10">
                            <i class="fa-solid fa-file-invoice text-black/50 text-8xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>