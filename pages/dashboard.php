<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'siswa') {
    header("Location: login.php");
    exit;
}

$nama = $_SESSION['username'];
$current_year = date('Y');

// Pastikan session pendaftar ada
if (!isset($_SESSION['pendaftar'])) {
    $_SESSION['pendaftar'] = [];
}

// Ambil data pendaftar peserta ini jika sudah ada
$pendaftaran = null;
foreach ($_SESSION['pendaftar'] as $p) {
    if ($p['nama'] === $nama) {
        $pendaftaran = $p;
        break;
    }
}

// Tangkap data form jika disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no_pendaftaran = 'SPMB-' . rand(100000, 999999);
    $jurusan        = $_POST['jurusan'] ?? '';
    $asal_sekolah   = $_POST['asal_sekolah'] ?? '';
    $status         = 'Dalam Proses Verifikasi';
    $status_kelulusan = 'Belum Diumumkan';
    $kelengkapan = ['Dokumen 1' => 1, 'Dokumen 2' => 0, 'Dokumen 3' => 0]; // contoh dummy

    $new_pendaftar = [
        'no_pendaftaran' => $no_pendaftaran,
        'nama' => $nama,
        'asal_sekolah' => $asal_sekolah,
        'jurusan' => $jurusan,
        'status' => $status,
        'status_kelulusan' => $status_kelulusan,
        'kelengkapan' => $kelengkapan
    ];

    // Simpan ke session
    $_SESSION['pendaftar'][] = $new_pendaftar;

    // Update variable lokal
    $pendaftaran = $new_pendaftar;

    $success_message = "Pendaftaran berhasil! Nomor Pendaftaran: $no_pendaftaran";
}

// Jika peserta sudah mendaftar, isi variabel untuk tampilan kartu
if ($pendaftaran) {
    $no_pendaftaran   = $pendaftaran['no_pendaftaran'];
    $status           = $pendaftaran['status'];
    $status_kelulusan = $pendaftaran['status_kelulusan'] ?? 'Belum Diumumkan';
    $kelengkapan      = $pendaftaran['kelengkapan'] ?? [];
} else {
    $no_pendaftaran = null;
    $status         = 'Belum Mendaftar';
    $status_kelulusan = 'Belum Diumumkan';
    $kelengkapan      = [];
}
?>


<?php include '../includes/header.php'; ?>

<section class="section-gray">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Dashboard Peserta</div>
            <h2 class="section-title">Selamat Datang, <?= htmlspecialchars($nama); ?></h2>
            <p class="section-description">
                Nomor Pendaftaran: <strong><?= $no_pendaftaran ?: 'SPMB-XXXXX'; ?></strong>
            </p>
        </div>

        <div class="card-grid">
            <div class="card">
                <div class="card-icon">📌</div>
                <h3>Status Pendaftaran</h3>
                <span class="badge badge-warning"><?= htmlspecialchars($status); ?></span>
            </div>

            <div class="card">
                <div class="card-icon">🎓</div>
                <h3>Status Kelulusan</h3>
                <span class="badge badge-secondary"><?= htmlspecialchars($status_kelulusan); ?></span>
            </div>

            <div class="card">
                <div class="card-icon">📄</div>
                <h3>Kelengkapan Dokumen</h3>
                <p>
                    <?= count(array_filter($kelengkapan)) ?> Lengkap • 
                    <?= count($kelengkapan) - count(array_filter($kelengkapan)) ?> Belum Lengkap
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-white">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Tahapan Seleksi</div>
            <h2 class="section-title">Progres Pendaftaran SPMB</h2>
        </div>

        <ul class="progress-list">
            <li class="done">Registrasi Akun</li>
            <li class="done">Pengisian Data Diri</li>
            <li class="done">Pemilihan Sekolah & Jurusan</li>
            <li class="pending">Upload Dokumen</li>
            <li class="pending">Verifikasi Panitia</li>
            <li>Pengumuman Hasil</li>
        </ul>
    </div>
</section>

<section class="section-gray">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Menu Peserta</div>
            <h2 class="section-title">Formulir Pendaftaran SPMB</h2>
        </div>

        <?php if (isset($pendaftaran)): ?>
            <div class="card-grid">
                <div class="card">
                    <div class="card-icon">📌</div>
                    <h3>Nomor Pendaftaran</h3>
                    <p><?= $pendaftaran['no_pendaftaran'] ?></p>
                </div>
                <div class="card">
                    <div class="card-icon">🏫</div>
                    <h3>Asal Sekolah</h3>
                    <p><?= $pendaftaran['asal_sekolah'] ?></p>
                </div>
                <div class="card">
                    <div class="card-icon">🎓</div>
                    <h3>Jurusan</h3>
                    <p><?= $pendaftaran['jurusan'] ?></p>
                </div>
                <div class="card">
                    <div class="card-icon">📄</div>
                    <h3>Status</h3>
                    <span class="badge badge-warning"><?= $pendaftaran['status'] ?></span>
                </div>
            </div>
        <?php else: ?>
            <form method="POST" style="margin-top:1rem;">
                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" required placeholder="Masukkan nama sekolah" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jurusan Pilihan</label>
                    <select name="jurusan" required class="form-control">
                        <option value="">Pilih Jurusan</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="BAHASA">BAHASA</option>
                        <option value="AKUNTASI">Akuntansi</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top:1rem;">Daftar Sekarang</button>
            </form>
        <?php endif; ?>
    </div>
</section>


<section class="section-white">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Informasi Resmi</div>
            <h2 class="section-title">Pengumuman & Jadwal SPMB</h2>
        </div>

        <div class="alert alert-info">
            <strong>📅 Jadwal Verifikasi Berkas</strong><br>
            Tanggal <strong>1–5 Juli <?= $current_year; ?></strong>.
        </div>

        <div class="alert alert-warning">
            <strong>⚠️ Perhatian</strong><br>
            Peserta wajib memastikan seluruh data dan dokumen sesuai ketentuan.
        </div>
        <br><br>
        <div>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
