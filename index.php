<?php
include "koneksi.php";

$query= "Select * from mahasiswa";
$data= ambildata($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>SIMPADUPOLIBAN</title>
</head>


<body>
    <h1>DATA MAHASISWA</h1>
    <br>
    <a href="tambahmahasiswa.php">Tambah</a>
    <table border="1" cellspacing="0" cellpadding="5" >
        <head>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Telp</th>
        </thead>
        <tbody>

            <?php 
            $i = 1;
            foreach ($data as $d) : ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $d["nim"]?></td>
                    <td><?php echo $d["nama"]?></td>
                    <td><?php echo $d["telp"]?></td>
                <tr>
            <?php endforeach; ?>
            </tr>  
        </tbody> 
    </table>  
</body>
</html>