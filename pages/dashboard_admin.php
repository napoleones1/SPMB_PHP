<?php
session_start();

// Pastikan hanya admin yang bisa akses
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

$nama = $_SESSION['username'];
$current_year = date('Y');

// Pastikan session pendaftar ada
if (!isset($_SESSION['pendaftar'])) {
    $_SESSION['pendaftar'] = [];
}

$pendaftar = $_SESSION['pendaftar'];

// Hitung ringkasan
$total_pendaftar = count($pendaftar);
$lulus = count(array_filter($pendaftar, fn($p) => $p['status'] === 'Lulus'));
$tidak_lulus = count(array_filter($pendaftar, fn($p) => $p['status'] === 'Tidak Lulus'));
?>

<?php include '../includes/header.php'; ?>

<!-- DASHBOARD ADMIN -->
<section class="section-gray">
    <div class="container">

        <div class="section-header" style="display:flex; justify-content:space-between; align-items:center;">
            <div>
                <div class="section-subtitle">Dashboard Admin</div>
                <h2 class="section-title">Panel Administrator SPMB</h2>
                <p class="section-description">
                    Kelola data pendaftar dan proses seleksi
                </p>
            </div>
        </div>

        <!-- RINGKASAN -->
        <div class="card-grid">
            <div class="card">
                <div class="card-icon">👥</div>
                <h3>Total Pendaftar</h3>
                <p><?= $total_pendaftar; ?> Peserta</p>
            </div>

            <div class="card">
                <div class="card-icon">✅</div>
                <h3>Lulus</h3>
                <p><?= $lulus; ?> Peserta</p>
            </div>

            <div class="card">
                <div class="card-icon">❌</div>
                <h3>Tidak Lulus</h3>
                <p><?= $tidak_lulus; ?> Peserta</p>
            </div>
        </div>

    </div>
</section>

<section class="section-white">
    <div class="container">
        <h2>Data Pendaftar</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No Pendaftaran</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pendaftar as $p): ?>
                <tr>
                    <td><?= htmlspecialchars($p['no_pendaftaran']); ?></td>
                    <td><?= htmlspecialchars($p['nama']); ?></td>
                    <td>
                        <span class="badge badge-warning"><?= htmlspecialchars($p['status']); ?></span>
                    </td>
                    <td>
                        <a href="update_status.php?no=<?= urlencode($p['no_pendaftaran']); ?>&status=Lulus" class="btn btn-success btn-sm">Lulus</a>
                        <a href="update_status.php?no=<?= urlencode($p['no_pendaftaran']); ?>&status=Tidak Lulus" class="btn btn-danger btn-sm">Tidak Lulus</a>
                        <a href="update_status.php?no=<?= urlencode($p['no_pendaftaran']); ?>&status=Dalam Proses Verifikasi" class="btn btn-secondary btn-sm">Reset</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br><br>
        <div>
            <a href="logout.php" class="btn btn-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
