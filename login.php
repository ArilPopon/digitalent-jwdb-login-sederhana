<?php
// Menghubungkan ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'jwdb_login';
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mendapatkan data pengguna dari tabel pengguna
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

// Memeriksa apakah data pengguna ditemukan
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: admin.php");
} else {
    echo "Username atau password salah";
}

// Menutup koneksi database
mysqli_close($conn);
