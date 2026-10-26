
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Latihan 07</title>
    <style>
        table {
            border-collapse: collapse;
            width: 450px;
        }

        th, td {
            border: 1px solid black;
            padding: 5px 10px;
        }

        th {
            text-align: center;
        }

        td:nth-child(2),
        td:nth-child(3) {
            text-align: right;
        }
    </style>
</head>
<body>

<h2>Tabel Data Penduduk</h2>

<?php
// Membuat array data penduduk
$penduduk = array(
    array("kecamatan" => "Moyudan",  "luas" => 27.62, "jumlah_penduduk" => 31497),
    array("kecamatan" => "Minggir",  "luas" => 27.27, "jumlah_penduduk" => 29886),
    array("kecamatan" => "Seyegan",  "luas" => 26.63, "jumlah_penduduk" => 47129),
    array("kecamatan" => "Godean",   "luas" => 26.84, "jumlah_penduduk" => 72028),
    array("kecamatan" => "Gamping",  "luas" => 29.25, "jumlah_penduduk" => 108675)
);
?>

<table>
    <tr>
        <th>kecamatan</th>
        <th>luas</th>
        <th>jumlah_penduduk</th>
    </tr>

    <?php foreach ($penduduk as $data) { ?>
    <tr>
        <td><?php echo $data["kecamatan"]; ?></td>
        <td><?php echo $data["luas"]; ?></td>
        <td><?php echo $data["jumlah_penduduk"]; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
