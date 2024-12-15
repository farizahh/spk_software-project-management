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

    <div class="p-4 sm:ml-80 mt-4">
        <h1 class="font-semibold text-2xl mt-5">Nilai Hasil Matrik</h1>
        <div class="border-solid">
            <div class="px-5">
                <div class="flex justify-end">
                    <!-- Modal toggle -->
                    <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block hover:underline text-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-3" type="button">
                        + Tambah
                    </button>

                    <!-- Main modal -->
                    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                    <h3 class="text-lg font-semibold text-gray-500">
                                        Isi Nilai Kandidat
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="static-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <form action="matrik-hasil-insert.php" method="post">
                                        <div class="mb-5">
                                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Kandidat</label>
                                            <select id="nama" name="id_alternatif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                <option value="" selected disabled>- Pilih Alternatif -</option>
                                                <!-- Options filled from database -->
                                                <?php
                                                $query = "SELECT * FROM alternatif";
                                                $result = $conn->query($query);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<option value='" . $row['id_alternatif'] . "'>" . $row['nama'] . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-5">
                                            <label for="kriteria" class="block mb-2 text-sm font-medium text-gray-900">Nama Kriteria</label>
                                            <select id="kriteria" name="id_kriteria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                <option value="" selected disabled>- Pilih Kriteria -</option>
                                                <!-- Options filled from database -->
                                                <?php
                                                $query = "SELECT * FROM kriteria";
                                                $result = $conn->query($query);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<option value='" . $row['id_kriteria'] . "'>" . $row['nama'] . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-5">
                                            <label for="value" class="block mb-2 text-sm font-medium text-gray-900">Value</label>
                                            <input type="text" id="value" name="value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                            <button type="button" data-modal-hide="static-modal" class="text-white bg-slate-500 hover:bg-slate-600 font-medium rounded-lg text-xs px-5 py-2 me-2 mb-2">Kembali</button>
                                            <button type="submit" name="submit" class="text-white bg-sky-600 hover:bg-sky-700 font-medium rounded-lg text-xs px-5 py-2 me-2 mb-2">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-50 uppercase bg-gray-500 text-center">
                            <tr>
                                <th rowspan='2' class="px-3 py-3">Alternatif</th>
                                <th colspan='6' class="px-3 py-3">Kriteria</th>
                                <th rowspan='2' class="px-3 py-3"><i class="fa-solid fa-gear"></i></th>
                            </tr>
                            <tr>
                                <th scope="col" class="px-3 py-3">C1</th>
                                <th scope="col" class="px-3 py-3">C2</th>
                                <th scope="col" class="px-3 py-3">C3</th>
                                <th scope="col" class="px-3 py-3">C4</th>
                                <th scope="col" class="px-3 py-3">C5</th>
                                <th scope="col" class="px-3 py-3">C6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT
                        a.id_alternatif,
                        b.nama,
                        SUM(IF(a.id_kriteria=1,a.value,0)) AS C1,
                        SUM(IF(a.id_kriteria=2,a.value,0)) AS C2,
                        SUM(IF(a.id_kriteria=3,a.value,0)) AS C3,
                        SUM(IF(a.id_kriteria=4,a.value,0)) AS C4,
                        SUM(IF(a.id_kriteria=5,a.value,0)) AS C5,
                        SUM(IF(a.id_kriteria=6,a.value,0)) AS C6
                        FROM
                        evaluasi a
                        JOIN alternatif b USING(id_alternatif)
                        GROUP BY a.id_alternatif
                        ORDER BY a.id_alternatif;";

                            $result = $conn->query($query);
                            $X = array(1 => array(), 2 => array(), 3 => array(), 4 => array(), 5 => array(), 6 => array());
                            while ($row = $result->fetch_object()) {
                                array_push($X[1], round($row->C1, 2));
                                array_push($X[2], round($row->C2, 2));
                                array_push($X[3], round($row->C3, 2));
                                array_push($X[4], round($row->C4, 2));
                                array_push($X[5], round($row->C5, 2));
                                array_push($X[6], round($row->C6, 2));
                                echo "<tr class='bg-white border-b hover:bg-gray-50 text-center'>
                        <th class='px-10 py-4 font-medium text-gray-900 whitespace-nowrap text-left'> A<sub class='pr-2'>{$row->id_alternatif}</sub> {$row->nama} </th>
                        <td class='px-3 py-4 w-28'>" . number_format($row->C1, 0, ',', '.') . "</td>
                        <td class='px-3 py-4'>" . round($row->C2, 2) . "</td>
                        <td class='px-3 py-4'>" . round($row->C3, 2) . "</td>
                        <td class='px-3 py-4'>" . round($row->C4, 2) . "</td>
                        <td class='px-3 py-4'>" . round($row->C5, 2) . "</td>
                        <td class='px-3 py-4'>" . round($row->C6, 2) . "</td>
                        <td class='px-3 py-4'>
                            <a href='keputusan-hapus.php?id={$row->id_alternatif}' class='font-medium text-blue-600 hover:underline'>Hapus</a>
                        </td>
                    </tr>\n";
                            }
                            $result->free();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>