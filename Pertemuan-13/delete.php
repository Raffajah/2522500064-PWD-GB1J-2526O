<?php
session_start();
require_once "koneksi.php";
require_once "fungsi.php";

if (!isset($_GET['cid']) || !is_numeric($_GET['cid'])) {
    $_SESSION["sinar_error"] = "ID tidak valid!";
    redirect_ke("read.php");
    exit;
}

$id = (int) $_GET['cid'];

$sql = "DELETE FROM tbl_tamu WHERE cid = ?";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    $_SESSION['sinar_error'] = 'Terjadi kesalahan sistem: ' . mysqli_error($conn);
    redirect_ke('read.php');
    exit;
}

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION["sinar_sukses"] = "Data berhasil dihapus.";
    redirect_ke("read.php");
    exit;
} else {
    $_SESSION['sinar_error'] = "Gagal menghapus data.";
    redirect_ke("read.php");
    exit;
}

mysqli_stmt_close($stmt);
?>