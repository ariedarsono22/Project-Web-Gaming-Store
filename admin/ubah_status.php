<?php include 'template/base_admin.php'; ?>

<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login_admin.php?pesan=belum_login");
}

?>


<?php
include '../koneksi.php';
$id = $_GET['id'];


$query = mysqli_query($koneksi, "UPDATE cart set status_cart = 'Sent' WHERE id_cart = '$id'");

header("location:cart_admin.php");


?>