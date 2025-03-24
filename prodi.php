<?php
include "koneksi.php";

$query= "Select * from prodi";
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
    <h1>DATA PRODI</h1>
    <br>
    <table border="1" cellspacing="0" cellpadding="5" >
        <head>
                <th>No</th>
                <th>Nama</th>
                <th>Kaprodi</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>

            <?php 
            $i = 1;
            foreach ($data as $d) : ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $d["nama"]?></td>
                    <td><?php echo $d["kaprodi"]?></td>
                    <td><?php echo $d["jurusan"]?></td>
                <tr>
            <?php endforeach; ?>
            </tr>  
        </tbody> 
    </table>  
</body>
</html>