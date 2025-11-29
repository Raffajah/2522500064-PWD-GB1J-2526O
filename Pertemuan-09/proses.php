<?php
session_start();

$arryContact = [
    "namacontact" => $_POST["txtNama"] ?? "",
    "emailcontact" => $_POST["txtEmail"] ?? "",
    "pesancontact" => $_POST["txtPesan"] ?? ""
];
$_SESSION["contact"] = $arryContact;

$arryBiodata = [
    "nim" => $_POST["txtNim"] ?? "",
    "nama" => $_POST["txtNmLengkap"] ?? "",
    "tempat" => $_POST["txtT4Lhr"] ?? "",
    "tanggal" => $_POST["txtTglLhr"] ?? "",
    "hobi" => $_POST["txtHobi"] ?? "",
    "pasangan" => $_POST["txtPasangan"] ?? "",
    "pekerjaan" => $_POST["txtKerja"] ?? "",
    "ortu" => $_POST["txtNmOrtu"] ?? "",
    "kakak" => $_POST["txtNmKakak"] ?? "",
    "adik" => $_POST["txtNmAdik"] ?? ""
];
$_SESSION["biodata"] = $arryBiodata;

header("location: index.php#about");
