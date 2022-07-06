<?php
session_start();
if ($_SESSION['status'] != "login") {
    echo "<script>
      window.location.href = 'login2.php';
      alert('You need to Login first before change your password');
</script>";
}
?>

<?php
include 'koneksi.php';
$infopass = "";

if (isset($_POST["cpasslama"]) && isset($_POST["passbaru"])) {
    $id = $_SESSION['id_user'];
    $cek = $_SESSION['password_user'];
    $cpasslapro = $_POST["cpasslama"];
    $passbapro = $_POST["passbaru"];

    if ($_POST) {
        if (strlen($cpasslapro) <= 0 || strlen($passbapro) <= 0) {
            $infopass = '<b>PERINGATAN:</b> Data belum diinput dengan benar';
        } elseif ($cpasslapro != $cek) {
            $infopass = '<b>PERINGATAN:</b> Password tidak sama';
        } elseif ($cpasslapro == $cek) {
            $query = mysqli_query($koneksi, "UPDATE user set password_user = '$passbapro' WHERE id_user = '$id'");
            $_SESSION['password_user'] = $passbapro;
            $infopass = '<b>SUKSES</b> Password Berhasil Diubah';
        }
        echo "<script>
      window.location.href = 'my-account.php';
      alert('Password has been changed');
</script>";
    }
}
?>