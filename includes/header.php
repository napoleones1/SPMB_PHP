<?php include_once __DIR__ . '/../config/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">SPMB <?php echo $current_year; ?></div>
            <nav>
                <ul>
                    <li><a href="../pages/landing.php">Home</a></li>
                    <li><a href="../pages/landing.php#informasi">Informasi</a></li>
                    <li><a href="../pages/landing.php#jalur">Jalur Pendaftaran</a></li>
                    <li><a href="../pages/landing.php#jadwal">Jadwal</a></li>
                    <li><a href="../pages/faq.php">FAQ</a></li>
                    <li><a href="../pages/login.php" class="btn-header">Daftar Sekarang</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
