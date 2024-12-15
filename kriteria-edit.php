<?php
include 'include/conn.php';

$id = $_GET['edit'];
$sql = "SELECT * FROM kriteria WHERE id_kriteria = '$id' ";
$result = $conn->query($sql);
$row = $result->fetch_array();
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
        <h1 class="font-semibold text-2xl mb-5">Kriteria Edit</h1>
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
            <h1 class="font-semibold">Edit Data</h1>
            <form action="kriteria-update.php" method="POST" class="mt-5">
                <div class="mb-5">
                    <input type="hidden" name="id" value="<?= $row['id_kriteria']; ?>">
                </div>
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Kriteria</label>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="nama" value="<?= $row['nama']; ?>" required />
                </div>
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Bobot</label>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="bobot" value="<?= $row['bobot']; ?>" required />
                </div>
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Atribut</label>
                    <select name="atribut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="benefit" <?= $row['atribut'] == 'benefit' ? 'selected' : ''; ?>>benefit</option>
                        <option value="cost" <?= $row['atribut'] == 'cost' ? 'selected' : ''; ?>>cost</option>
                    </select>


                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>