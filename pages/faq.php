<?php
include __DIR__ . '/../includes/header.php';
?>

<!-- FAQ -->
<section id="faq" class="section-gray">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Bantuan</div>
            <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
            <p class="section-description">
                Temukan jawaban atas pertanyaan umum seputar proses pendaftaran dan penerimaan murid baru.
            </p>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">Bagaimana cara mendaftar SPMB online?</div>
                <div class="faq-answer">
                    Anda dapat mendaftar melalui website ini dengan mengisi formulir pendaftaran online,
                    melengkapi data diri, dan mengunggah dokumen persyaratan yang diminta.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Apa saja dokumen yang diperlukan untuk pendaftaran?</div>
                <div class="faq-answer">
                    Dokumen yang diperlukan antara lain Kartu Keluarga, Akta Kelahiran,
                    Ijazah atau Surat Keterangan Lulus jenjang sebelumnya, rapor terakhir,
                    pas foto terbaru, serta sertifikat prestasi (jika melalui jalur prestasi).
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Apakah pendaftaran SPMB dipungut biaya?</div>
                <div class="faq-answer">
                    Pendaftaran SPMB tidak dipungut biaya (gratis). Peserta diimbau untuk
                    waspada terhadap segala bentuk penipuan yang mengatasnamakan SPMB.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Berapa sekolah yang dapat dipilih?</div>
                <div class="faq-answer">
                    Setiap calon murid dapat memilih maksimal tiga sekolah sesuai dengan
                    ketentuan yang berlaku dan mengurutkannya berdasarkan prioritas.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Bagaimana sistem seleksi penerimaan murid?</div>
                <div class="faq-answer">
                    Sistem seleksi dilakukan berdasarkan jalur pendaftaran yang dipilih,
                    seperti jalur domisili, prestasi, afirmasi, dan mutasi sesuai dengan
                    peraturan yang berlaku.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Kapan pengumuman hasil seleksi?</div>
                <div class="faq-answer">
                    Pengumuman hasil seleksi akan diumumkan pada bulan Juli <?php echo $current_year; ?>
                    melalui website resmi SPMB. Peserta dapat mengecek hasil seleksi dengan login ke akun masing-masing.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Apa yang harus dilakukan jika dinyatakan diterima?</div>
                <div class="faq-answer">
                    Peserta yang diterima wajib melakukan daftar ulang sesuai jadwal yang ditentukan
                    dengan membawa dokumen asli ke sekolah tujuan.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Bagaimana jika tidak diterima di pilihan pertama?</div>
                <div class="faq-answer">
                    Sistem akan otomatis memproses ke pilihan berikutnya selama kuota masih tersedia.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="section-white">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Hubungi Kami</div>
            <h2 class="section-title">Layanan Bantuan</h2>
            <p class="section-description">
                Tim kami siap membantu apabila terdapat kendala atau pertanyaan terkait SPMB.
            </p>
        </div>

        <div class="contact-grid">
            <div class="contact-card">
                <div class="contact-icon">📞</div>
                <h3>Telepon</h3>
                <p><strong>(021) 1234-5678</strong></p>
                <p>Senin – Jumat<br>08.00 – 16.00 WIB</p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">📧</div>
                <h3>Email</h3>
                <p><strong>info@spmb.go.id</strong></p>
                <p>Respon maksimal 1×24 jam</p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">💬</div>
                <h3>WhatsApp</h3>
                <p><strong>0812-3456-7890</strong></p>
                <p>Layanan chat aktif</p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">📍</div>
                <h3>Kantor</h3>
                <p><strong>Dinas Pendidikan</strong></p>
                <p>Jl. Pendidikan No. 123<br>Indonesia</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
