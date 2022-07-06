<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>

<?php
include 'koneksi.php';
$id = $_GET['id'];


$query = mysqli_query($koneksi, "delete from cart where id_cart='$id'");

header("location:my-account.php");


?>