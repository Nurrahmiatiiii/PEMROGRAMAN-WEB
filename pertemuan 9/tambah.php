<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Diary Baru - Web Diary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>📝 Tambah Diary Baru</h1>
            <a href="index.php" class="btn btn-secondary">← Kembali ke Beranda</a>
        </header>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-error">
                <?= $_SESSION['error']; ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <div class="form-container">
            <form action="simpan.php" method="POST">
                <div class="form-group">
                    <label for="title">Judul Diary:</label>
                    <input type="text" id="title" name="title" required 
                           placeholder="Masukkan judul diary Anda...">
                </div>

                <div class="form-group">
                    <label for="content">Isi Diary:</label>
                    <textarea id="content" name="content" rows="10" required 
                              placeholder="Tulis isi diary Anda di sini..."></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">💾 Simpan Diary</button>
                    <a href="index.php" class="btn btn-secondary">❌ Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>