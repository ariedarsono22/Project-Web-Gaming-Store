<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
} else {
    include 'koneksi.php';
    $id = $_SESSION['id_user'];
    $query = mysqli_query($koneksi, "UPDATE user set status = 'on' WHERE id_user = '$id'");
}

?>

<?php
include 'koneksi.php';

$idusercon = $_POST["iduserbar"];
$idbarangcon = $_POST["idbarangbar"];
$namausercon = $_POST["connamauserbar"];
$namabarangcon = $_POST["connamabar"];
$alamatusercon = $_POST["conalamatbar"];
$hargabarangcon = $_POST["conhargabar"];
$walletusercon = $_POST["conwalletbar"];
$jumlahpesanancon = $_POST["conjumlahbar"];

$hasil = $hargabarangcon * $jumlahpesanancon;

if (!preg_match("/^[0-9]*$/", $jumlahpesanancon)) {
    header("location:index.php?info=inputangka");
} else {
    if ($hasil > $walletusercon) { echo "<script>
        window.location.href = 'my-account.php';
        alert('Not enough money, Please Top Up first!');
  </script>";
    } elseif ($jumlahpesanancon == 0) {

        header("location:index.php?info=jumlahpesanan");
    } else {
        $query = mysqli_query($koneksi, "insert into cart(id_item, id_user, user_name, item_name_cart, address_cart, total_item, price_cart, status_cart) values('$idbarangcon','$idusercon','$namausercon','$namabarangcon','$alamatusercon','$jumlahpesanancon','$hasil','On Process')");
        $kurang = $walletusercon - $hasil;
        $_SESSION['wallet'] = $kurang;
        $querywallet = mysqli_query($koneksi, "UPDATE user set wallet = '$kurang' WHERE id_user = '$idusercon'");

        echo "<script>
        window.location.href = 'my-account.php';
        alert('Purchase Success');
  </script>";
    }
}



?>