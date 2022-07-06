<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>

<?php
include 'koneksi.php';
$infopro = "";

if (isset($_POST["email"]) && isset($_POST["name"])) {
    $id = $_SESSION['id_user'];
    $mailpro = $_POST["email"];
    $namapro = $_POST["name"];
    $alamatpro = $_POST["alamat"];

    if ($_POST) {
        if (strlen($mailpro) <= 0 || strlen($namapro) <= 0) {
            $infopro = '<b>PERINGATAN:</b> Data belum diinput dengan benar';
        } else {
            $query = mysqli_query($koneksi, "UPDATE user set email_user = '$mailpro', user_name = '$namapro', alamat = '$alamatpro' WHERE id_user = '$id'");
            $_SESSION['email_user'] = $mailpro;
            $_SESSION['user_name'] = $namapro;
            $_SESSION['alamat'] = $alamatpro;
            $infopro = '';
        }
        echo "<script>
      window.location.href = 'my-account.php';
      alert('Data has been changed');
</script>";
    }
}
?>