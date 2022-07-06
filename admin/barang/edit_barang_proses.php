<?php include 'session_barang.php'; ?>
<?php
include '../../koneksi.php';
$info = "";



$id = $_POST["idbardit"];
$namabarangedit = $_POST["namabardit"];
$filegambarbarangedit = $_FILES["gambarbardit"]["name"];
$deskbarangedit = $_POST["deskbardit"];
$hargabarangedit = $_POST["hargabardit"];
$tanggalbarangedit = $_POST["tanggalbardit"];
$pathedit = $_FILES['gambarbardit']['tmp_name'];

if ($_POST) {

    if (strlen($filegambarbarangedit) <= 0) {
        $query = mysqli_query($koneksi, "update item set item_name = '$namabarangedit', description = '$deskbarangedit', price = '$hargabarangedit', date = '$tanggalbarangedit' where id_item = '$id'");
        $info = '<b>SUKSES</b> Data Barang Berhasil Diubah';
        header("location:../home_admin.php?info=$info");
    } else {
        if (move_uploaded_file($pathedit, "foto_barang/$filegambarbarangedit")) {
            $query = mysqli_query($koneksi, "update item set item_name = '$namabarangedit', picture = '$filegambarbarangedit', description = '$deskbarangedit', price = '$hargabarangedit', date = '$tanggalbarangedit' where id_item = '$id'");
            $info = '<b>SUKSES</b> Data Barang Berhasil Diubah';
            header("location:../home_admin.php?info=$info");
        } else {
            echo "FOTO: There was a problem uploading your file - please try again<br>";
        }
    }
}


?>