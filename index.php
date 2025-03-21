<?php
$servername = "localhost";
$database = "latihan_fadia";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
//mysqli_connect("server", "username", "password", "database")

$query ="SELECT * FROM mahasiswa";
$hasil =mysqli_query($conn, $query);

$data = [];
while ($baris = mysqli_fetch_assoc($hasil)) {
    $data[] = $baris;
}

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
    <table border="1" cellspacing="0" cellpadding="5" >
        <head>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
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