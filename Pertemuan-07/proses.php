<?php 
session_start();

$akunama = $_POST["txtNama"];
$akuemail = $_POST["txtEmail"];
$akupesan = $_POST["txtPesan"];

header("Location: index.php");
?>