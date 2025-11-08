<?php
include 'koneksi.php';
session_start();

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    // Hapus dari database
    $query = "DELETE FROM diaries WHERE id = '$id'";
    
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['success'] = "Diary berhasil dihapuss!";
    } else {
        $_SESSION['error'] = "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}

header("Location: index.php");
mysqli_close($koneksi);
?>