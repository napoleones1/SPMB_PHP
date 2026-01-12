<?php
session_start();

// Pastikan hanya admin yang bisa update
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

// Pastikan session pendaftar ada
if (!isset($_SESSION['pendaftar'])) {
    $_SESSION['pendaftar'] = [];
}

// Tangkap data dari URL (misal ?no=SPMB-123456&status=Lulus)
if (isset($_GET['no']) && isset($_GET['status'])) {
    $no = $_GET['no'];
    $statusBaru = $_GET['status'];

    // Update status peserta sesuai no_pendaftaran
    foreach ($_SESSION['pendaftar'] as &$p) {
        if ($p['no_pendaftaran'] === $no) {
            $p['status'] = $statusBaru;
            break;
        }
    }
    unset($p); // Hapus reference untuk keamanan
}

// Kembali ke dashboard admin
header("Location: dashboard_admin.php");
exit;
?>
