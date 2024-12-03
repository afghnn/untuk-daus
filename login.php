<?php
// Dummy credentials
$valid_username = "mydoct";
$valid_password = "1234";

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi
if ($username === $valid_username && $password === $valid_password) {
    // Jika berhasil login, redirect ke dashboard
    header("Location: dashboard.php");
    exit();
} else {
    // Jika gagal login, kembali ke halaman login 
    echo "<script>alert('Username atau Password salah!'); window.location.href='index.html';</script>";
}
?>
