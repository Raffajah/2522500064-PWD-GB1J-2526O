<?php 
session_start();

$_SESSION["txtNama"] = $_GET["txtNama"];
$_SESSION["txtEmail"] = $_GET["txtEmail"];
$_SESSION["txtUsia"] = $_GET["txtUsia"];
$_SESSION["txtHobi"] = $_GET["txtHobi"];
$_SESSION["txtLokasi"] = $_GET["txtLokasi"];
$_SESSION["txtGender"] = $_GET["txtGender"];
$_SESSION["txtNim"] = $_GET["txtNim"];
$_SESSION["txtJam"] = $_GET["txtJam"];
$_SESSION["txtSuka"] = $_GET["txtSuka"];
$_SESSION["txtPesan"] = $_GET["txtPesan"];


header("Location: nilai.php");
?>