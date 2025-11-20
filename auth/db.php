<?php
$servername = "127.0.0.1";      // gunakan 127.0.0.1 untuk koneksi TCP (opsional)
$username   = "antrianuser";
$password   = "password";
$dbname     = "antrian";

try {
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    $conn = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    // tampilkan pesan error agar mudah debug (hapus/ubah pada production)
    die("Koneksi ke database gagal: " . $e->getMessage());
}

