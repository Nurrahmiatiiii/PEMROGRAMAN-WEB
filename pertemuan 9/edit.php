<?php
include 'koneksi.php';
session_start();

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = "SELECT * FROM diaries WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$diary = mysqli_fetch_assoc($result);

if (!$diary) {
    $_SESSION['error'] = "Diary tidak ditemukan!";
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Diary - Web Diary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>✏️ Edit Diary</h1>
            <a href="index.php" class="btn btn-secondary">← Kembali ke Beranda</a>
        </header>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-error">
                <?= $_SESSION['error']; ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <div class="form-container">
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?= $diary['id']; ?>">
                
                <div class="form-group">
                    <label for="title">Judul Diary:</label>
                    <input type="text" id="title" name="title" required 
                           value="<?= htmlspecialchars($diary['title']); ?>">
                </div>

                <div class="form-group">
                    <label for="content">Isi Diary:</label>
                    <textarea id="content" name="content" rows="10" required><?= htmlspecialchars($diary['content']); ?></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">💾 Update Diary</button>
                    <a href="index.php" class="btn btn-secondary">❌ Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php mysqli_close($koneksi); ?>