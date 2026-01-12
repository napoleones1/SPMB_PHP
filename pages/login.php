<?php include '../includes/header.php'; ?>

<section id="login" class="section-gray">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Akses Akun</div>
            <h2 class="section-title">Login Portal</h2>
        </div>

        <div class="login-container">
            <div class="login-header">
                <h2>Login</h2>
                <p style="color: var(--color-text-light);">Masuk ke akun Anda</p>
            </div>

            <form action="proses_login.php" method="POST">
                <div class="form-group">
                    <label>Nomor Pendaftaran / Username</label>
                    <input type="text" name="username" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <div class="form-group">
                    <label>Tipe Pengguna</label>
                    <select name="role" required>
                        <option value="">Pilih Tipe Pengguna</option>
                        <option value="siswa">Calon Siswa</option>
                        
                        <option value="admin">Administrator</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" style="width:100%; margin-top:1rem;">
                    Masuk
                </button>
                <p style="text-align: center; margin-top: 1.5rem; color: var(--color-text-light);">
                        Belum punya akun? <a href="register.php" style="color: var(--color-primary); font-weight: 600;">Daftar Sekarang</a>
                    </p>
            </form>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
