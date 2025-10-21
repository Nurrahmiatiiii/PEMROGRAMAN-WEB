<?php
include 'koneksi.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($koneksi, $_POST['title']);
    $content = mysqli_real_escape_string($koneksi, $_POST['content']);
    
    // Validasi input
    if (empty($title) || empty($content)) {
        $_SESSION['error'] = "Judul dan isi diary harus diisi!";
        header("Location: tambah.php");
        exit();
    }
    
    // Simpan ke database
    $query = "INSERT INTO diaries (title, content, created_at) VALUES ('$title', '$content', NOW())";
    
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['success'] = "Diary berhasil ditambahkan!";
        header("Location: index.php");
    } else {
        $_SESSION['error'] = "Terjadi kesalahan: " . mysqli_error($koneksi);
        header("Location: tambah.php");
    }
} else {
    header("Location: tambah.php");
}

mysqli_close($koneksi);
?>