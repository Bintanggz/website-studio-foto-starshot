<?php
session_start();
include '../../connection.php';

// Pastikan hanya admin yang bisa menghapus
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../../login.php");
    exit;
}

// Pastikan parameter studio_id dikirim
if (!isset($_GET['studio_id']) || empty($_GET['studio_id'])) {
    header("Location: manageStudios.php?error=invalid_id");
    exit;
}

$studio_id = intval($_GET['studio_id']);

// Ambil data dulu untuk hapus file gambar kalau ada
$querySelect = "SELECT image FROM studio WHERE id = ?";
$stmtSelect = mysqli_prepare($conn, $querySelect);
mysqli_stmt_bind_param($stmtSelect, 'i', $studio_id);
mysqli_stmt_execute($stmtSelect);
$result = mysqli_stmt_get_result($stmtSelect);
$studio = mysqli_fetch_assoc($result);

// Jika ada file gambar, hapus juga dari folder uploads
if ($studio && !empty($studio['image'])) {
    $imagePath = "../../assets/uploads/" . $studio['image'];
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
}

// Hapus data studio dari database
$queryDelete = "DELETE FROM studio WHERE id = ?";
$stmtDelete = mysqli_prepare($conn, $queryDelete);
mysqli_stmt_bind_param($stmtDelete, 'i', $studio_id);
mysqli_stmt_execute($stmtDelete);

// Arahkan kembali ke halaman manage studio
header("Location: manageStudios.php?success=deleted");
exit;
?>
