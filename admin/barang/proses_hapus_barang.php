<?php
include '../../koneksi.php';
$info = "";

$id = $_POST["id_item"];
if ($_POST) {
    $query = mysqli_query($koneksi, "delete from item where id_item='$id'");
    $info = '<b>SUKSES</b> Data Berhasil Dihapus';

    header("location:../home_admin.php?info=$info");
}
