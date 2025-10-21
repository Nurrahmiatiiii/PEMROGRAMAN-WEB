<?php
include 'koneksi.php';
session_start();

// Ambil semua diary
$query = "SELECT * FROM diaries ORDER BY created_at DESC";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Diary - Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>📖 Diary Almii</h1>
            <p>Ceritakan hari-harimu disini</p>
        </header>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                <?= $_SESSION['success']; ?>
                <?php unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-error">
                <?= $_SESSION['error']; ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <div class="action-buttons">
            <a href="tambah.php" class="btn btn-primary">➕ Tambah Diary Baru</a>
        </div>

        <div class="diaries-grid">
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($diary = mysqli_fetch_assoc($result)): ?>
                    <div class="diary-card">
                        <div class="diary-header">
                            <h3><?= htmlspecialchars($diary['title']); ?></h3>
                            <span class="date"><?= date('d M Y H:i', strtotime($diary['created_at'])); ?></span>
                        </div>
                        <div class="diary-content">
                            <p><?= nl2br(htmlspecialchars($diary['content'])); ?></p>
                        </div>
                        <div class="diary-actions">
                            <a href="edit.php?id=<?= $diary['id']; ?>" class="btn btn-edit">✏️ Edit</a>
                            <a href="hapus.php?id=<?= $diary['id']; ?>" class="btn btn-delete" 
                               onclick="return confirm('Yakin ingin menghapus diary ini?')">🗑️ Hapus</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="empty-state">
                    <p>Belum ada diary. <a href="tambah.php">Tulis diary pertama Anda!</a></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

<?php mysqli_close($koneksi); ?>