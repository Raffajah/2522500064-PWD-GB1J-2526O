<?php
session_start();
$sesnim = $_POST["txtNim"];
$sesnamalengkap = $_POST["txtNamalengkap"];
$sestempatlahir = $_POST["txtTempatlahir"];
$sestanggallahir = $_POST["txtTanggallahir"];
$seshobi = $_POST["txtHobi"];
$sespasangan = $_POST["txtPasangan"];
$sespekerjaan = $_POST["txtPekerjaan"];
$sesnamaorangtua = $_POST["txtNamaorangtua"];
$sesnamakakak = $_POST["txtNamakakak"];
$sesnamaadik = $_POST["txtNamaadik"];

$_SESSION["sesnim"] = $sesnim;
$_SESSION["sesnamalengkap"] = $sesnamalengkap;
$_SESSION["sestempatlahir"] = $sestempatlahir;
$_SESSION["sestanggallahir"] = $sestanggallahir;
$_SESSION["seshobi"] = $seshobi;
$_SESSION["sespasangan"] = $sespasangan;
$_SESSION["sespekerjaan"] = $sespekerjaan;
$_SESSION["sesnamaorangtua"] = $sesnamaorangtua;
$_SESSION["sesnamakakak"] = $sesnamakakak;
$_SESSION["sesnamaadik"] = $sesnamaadik;

header("location: index.php");
?>