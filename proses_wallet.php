<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login2.php?pesan=belum_login");
} else {
    include 'koneksi.php';
    $id = $_SESSION['id_user'];
    $query = mysqli_query($koneksi, "UPDATE user set status = 'on' WHERE id_user = '$id'");
}

?>


<?php
include 'koneksi.php';
$id = $_SESSION['id_user'];
$editwallet = $_SESSION['wallet'];
$tambahwallet = $_POST["walletplus"];

if (!preg_match("/^[0-9]*$/", $tambahwallet)) {
    header("location:my-account.php?info=walletangka");
} else {
    if ($tambahwallet > 0) {
        $hasil = $editwallet + $tambahwallet;
        $query = mysqli_query($koneksi, "UPDATE user set wallet = '$hasil' WHERE id_user = '$id'");
        $_SESSION['wallet'] = $hasil;
        echo "<script>
        window.location.href = 'index.php';
        alert('Top up Success');
  </script>";
    } else {
        $query = mysqli_query($koneksi, "UPDATE user set wallet = '$tambahwallet' WHERE id_user = '$id'");
        header("location:my-account.php");
    }
}

?>