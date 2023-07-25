<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "web_dasar_a1_2109010011_muhammadhaekal";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon){
    die("Koneksi Gagal : ".mysqli_connect_error());

}
?>