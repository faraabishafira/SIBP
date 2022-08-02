<?php
require 'functions.php';
//ambil data santri
$santri = query("SELECT * FROM data_santri");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
<h1>DATA SANTRI</h1>

<table border="1" cellpadding="10" celspacing="0">
    <tr>
        <th>no</th>
        <th>nis</th>
        <th>nama</th>
        <th>asrama</th>
        <th>score awal</th>
        <th>score akhir</th>
        <th>jumlah</th>
    </tr>
    <?php $i = 1; ?>

    <?php foreach ($santri as $row) : ?>

        <tr>

        <td><?= $i; ?></td>
        <td><?= $row["nis"];  ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["asrama"]; ?></td>
        <td><?= $row["score awal"]; ?></td>
        <td><?= $row["score akhir"]; ?></td>
        <td><?= $row["jumlah"]; ?></td>
        
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</table>
</body>
</html>
