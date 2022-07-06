<?php

$server = "localhost"; //nama server
$user = "root"; //username server
$pass = "";  //password
$database = "toko_online"; // database yang dipakai

//Membuat koneksi
$koneksi = mysqli_connect($server, $user, $pass, $database);

//Mengecek koneksi 
if (!$koneksi) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}
