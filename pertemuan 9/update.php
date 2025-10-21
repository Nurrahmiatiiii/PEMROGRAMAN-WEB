<?php
include 'koneksi.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $title = mysqli_real_escape_string($koneksi, $_POST['title']);
    $content = mysqli_real_escape_string($koneksi, $_POST['content']);
    
    // Validasi input
    if (empty($title) || empty($content)) {
        $_SESSION['error'] = "Judul dan isi diary harus diisi!";
        header("Location: edit.php?id=$id");
        exit();
    }
    
    // Update database
    $query = "UPDATE diaries SET title = '$title', content = '$content', updated_at = NOW() WHERE id = '$id'";
    
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['success'] = "Diary berhasil diupdate!";
        header("Location: index.php");
    } else {
        $_SESSION['error'] = "Terjadi kesalahan: " . mysqli_error($koneksi);
        header("Location: edit.php?id=$id");
    }
} else {
    header("Location: index.php");
}

mysqli_close($koneksi);
?>