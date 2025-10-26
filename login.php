<?php
// Username dan password yang ditentukan
$valid_username = "admin";
$valid_password = "12345";

// Mengecek apakah form sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validasi input
    if ($username === $valid_username && $password === $valid_password) {
        echo "<h2>Login Berhasil!</h2>";
        echo "<p>Selamat datang, <strong>" . htmlspecialchars($username) . "</strong>.</p>";
    } else {
        echo "<h2>Login Gagal!</h2>";
        echo "<p>Username atau password salah.</p>";
        echo "<a href='login.html'>Coba Lagi</a>";
    }
} else {
    // Jika halaman diakses langsung tanpa form
    header("Location: login.html");
    exit();
}
?>
