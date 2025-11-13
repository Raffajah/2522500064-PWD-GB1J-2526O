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

$_SESSION["txtnim"] = $sesnim;
$_SESSION["txtnamalengkap"] = $sesnamalengkap;
$_SESSION["txttempatlahir"] = $sestempatlahir;
$_SESSION["txttanggallahir"] = $sestanggallahir;
$_SESSION["txthobi"] = $seshobi;
$_SESSION["txtpasangan"] = $sespasangan;
$_SESSION["txtpekerjaan"] = $sespekerjaan;
$_SESSION["txtnamaorangtua"] = $sesnamaorangtua;
$_SESSION["txtnamakakak"] = $sesnamakakak;
$_SESSION["txtnamaadik"] = $sesnamaadik;
header("location: index.php");
?>