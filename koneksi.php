<?php
$servername = "localhost";
$database = "latihan_fadia";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

function ambildata ($query): array
{
    $conn = $GLOBALS['conn'];
    $hasil = mysqli_query(mysqli : $conn, query: $query);

    $data = [];
    while ($baris = mysqli_fetch_assoc(result: $hasil)) {

        $data[] = $baris;
    }
    return $data;
}
?>

