<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$maillog = $_POST['email'];
$passlog = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from user where email_user='$maillog' and password_user='$passlog'");


if (mysqli_num_rows($data) > 0) {
    $passing = mysqli_fetch_array($data);
    $_SESSION['email_user'] = $maillog;
    $_SESSION['password_user'] = $passing['password_user'];
    $_SESSION['id_user'] = $passing['id_user'];
    $_SESSION['alamat'] = $passing['alamat'];
    $_SESSION['user_name'] = $passing['user_name'];
    $_SESSION['wallet'] = $passing['wallet'];
    $_SESSION['status'] = "login";


    header("location:index.php");
} else {
    header("location:login2.php?pesan=gagal");
}

?>