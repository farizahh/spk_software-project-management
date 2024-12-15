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
        <h1 class="font-semibold text-2xl mt-10">Normalisasi Matrik Keputusan</h1>
        <div class="border-solid">
            <div class="px-5 py-3">
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-50 uppercase bg-gray-500 text-center">
                            <tr>
                                <th rowspan='2' class="px-3 py-3">Alternatif</th>
                                <th colspan='6' class="px-3 py-3">Kriteria</th>
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
                            $R = array();
                            $query = "
                                SELECT a.id_alternatif,
                                       MAX(CASE WHEN a.id_kriteria = 1 THEN IF(b.atribut = 'benefit', a.value / (SELECT MAX(value) FROM evaluasi WHERE id_kriteria = 1), (SELECT MIN(value) FROM evaluasi WHERE id_kriteria = 1) / a.value) END) AS C1,
                                       MAX(CASE WHEN a.id_kriteria = 2 THEN IF(b.atribut = 'benefit', a.value / (SELECT MAX(value) FROM evaluasi WHERE id_kriteria = 2), (SELECT MIN(value) FROM evaluasi WHERE id_kriteria = 2) / a.value) END) AS C2,
                                       MAX(CASE WHEN a.id_kriteria = 3 THEN IF(b.atribut = 'benefit', a.value / (SELECT MAX(value) FROM evaluasi WHERE id_kriteria = 3), (SELECT MIN(value) FROM evaluasi WHERE id_kriteria = 3) / a.value) END) AS C3,
                                       MAX(CASE WHEN a.id_kriteria = 4 THEN IF(b.atribut = 'benefit', a.value / (SELECT MAX(value) FROM evaluasi WHERE id_kriteria = 4), (SELECT MIN(value) FROM evaluasi WHERE id_kriteria = 4) / a.value) END) AS C4,
                                       MAX(CASE WHEN a.id_kriteria = 5 THEN IF(b.atribut = 'benefit', a.value / (SELECT MAX(value) FROM evaluasi WHERE id_kriteria = 5), (SELECT MIN(value) FROM evaluasi WHERE id_kriteria = 5) / a.value) END) AS C5,
                                       MAX(CASE WHEN a.id_kriteria = 6 THEN IF(b.atribut = 'benefit', a.value / (SELECT MAX(value) FROM evaluasi WHERE id_kriteria = 6), (SELECT MIN(value) FROM evaluasi WHERE id_kriteria = 6) / a.value) END) AS C6
                                FROM evaluasi a
                                JOIN kriteria b USING(id_kriteria)
                                GROUP BY a.id_alternatif
                                ORDER BY a.id_alternatif";

                            $result = $conn->query($query);

                            while ($row = $result->fetch_object()) {
                                echo "<tr class='bg-white border-b hover:bg-gray-50 text-center'>
                                        <th class='px-10 py-4 font-medium text-gray-900 whitespace-nowrap text-left'> A{$row->id_alternatif}</th>
                                        <td class='px-3 py-4'>" . number_format($row->C1, 4) . "</td>
                                        <td class='px-3 py-4'>" . number_format($row->C2, 4) . "</td>
                                        <td class='px-3 py-4'>" . number_format($row->C3, 4) . "</td>
                                        <td class='px-3 py-4'>" . number_format($row->C4, 4) . "</td>
                                        <td class='px-3 py-4'>" . number_format($row->C5, 4) . "</td>
                                        <td class='px-3 py-4'>" . number_format($row->C6, 4) . "</td>
                                    </tr>\n";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>