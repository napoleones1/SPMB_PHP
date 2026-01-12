<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $role     = trim($_POST['role'] ?? '');

    if (
        isset($_SESSION['users']) &&
        $username !== '' &&
        $password !== '' &&
        $role !== ''
    ) {

        foreach ($_SESSION['users'] as $user) {
            if (
                $user['username'] === $username &&
                $user['password'] === $password &&
                $user['role'] === $role
            ) {
                // Login sukses
                $_SESSION['login'] = true;
                $_SESSION['username'] = $user['nama'];
                $_SESSION['role'] = $role;

                if ($role == 'siswa') {
                    header("Location: dashboard.php");
                } elseif ($role == 'admin') {
                    header("Location: dashboard_admin.php");
                } elseif ($role == 'sekolah') {
                    header("Location: dashboard_sekolah.php");
                }
                

                exit;
            }
        }
    }

    // Login gagal
    header("Location: login.php?error=1");
    exit;
} else {
    header("Location: login.php");
    exit;
}
