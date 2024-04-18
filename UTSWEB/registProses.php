<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $firstname = $_POST["fname"]; // Menyimpan "First Name"
    $lastname = $_POST["lname"]; // Menyimpan "Last Name"
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Simpan data registrasi ke dalam session
    $_SESSION['registration_data'] = [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'password' => $password
    ];

    // Tampilkan pesan alert
    echo "<script>alert('Member berhasil registrasi atas nama " . $firstname . " " . $lastname . "!');</script>";

    // Redirect ke halaman utama setelah menampilkan alert
    echo "<script>window.location.href = 'index.html';</script>";
    exit();
}
?>
