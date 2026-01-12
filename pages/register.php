<?php include '../includes/header.php'; ?>

<section id="register" class="section-gray">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Buat Akun</div>
            <h2 class="section-title">Registrasi Akun</h2>
        </div>

        <div class="login-container">
            <div class="login-header">
                <h2>Register</h2>
                <p style="color: var(--color-text-light);">
                    Daftar akun untuk mengikuti SPMB
                </p>
            </div>

            <!-- FORM REGISTER -->
            <form action="proses_register.php" method="POST">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" name="nisn" placeholder="Masukkan NISN" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="contoh@email.com" required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Buat username" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Buat password" required>
                </div>

                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirm" placeholder="Ulangi password" required>
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
                    Daftar
                </button>

                <p style="text-align: center; margin-top: 1.5rem; color: var(--color-text-light);">
                    Sudah punya akun?
                    <a href="login.php" style="color: var(--color-primary); font-weight: 600;">
                        Login
                    </a>
                </p>
            </form>
            <!-- END FORM -->

        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
