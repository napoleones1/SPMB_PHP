<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama     = trim($_POST['nama'] ?? '');
    $nisn     = trim($_POST['nisn'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirm  = trim($_POST['password_confirm'] ?? '');
    $role     = trim($_POST['role'] ?? '');

    $allowed_roles = ['siswa', 'sekolah', 'admin'];

    // Validasi dasar
    if (
        $nama !== '' &&
        $nisn !== '' &&
        $email !== '' &&
        $username !== '' &&
        $password !== '' &&
        $password === $confirm &&
        in_array($role, $allowed_roles)
    ) {

        // Inisialisasi session user jika belum ada
        if (!isset($_SESSION['users'])) {
            $_SESSION['users'] = [];
        }

        // Simpan user ke session
        $_SESSION['users'][] = [
            'nama'     => $nama,
            'nisn'     => $nisn,
            'email'    => $email,
            'username' => $username,
            'password' => $password, // nanti bisa di-hash
            'role'     => $role
        ];

        // Redirect ke login
        header("Location: login.php?register=success");
        exit;

    } else {
        header("Location: register.php?error=1");
        exit;
    }

} else {
    header("Location: register.php");
    exit;
}
