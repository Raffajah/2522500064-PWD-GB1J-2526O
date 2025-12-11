<?php
session_start();
require_once "koneksi.php";
require_once "fungsi.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $_SESSION["error"] = "Akses tidak valid!";
    redirect_ke("index.php#contact");
    exit;
}

$nama  = trim($_POST["txtNama"] ?? '');
$email = trim($_POST["txtEmail"] ?? '');
$pesan = trim($_POST["txtPesan"] ?? '');

$eror = [];

if ($nama === "") {
    $eror[] = "Nama harus diisi!";
    /*nama*/
}elseif (strlen($nama) < 3) {
    $eror[] = "Nama minimal 3 karakter!";
}

if ($email === "") {
    $eror[] = "Email harus diisi!";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $eror[] = "Format email tidak valid!";
}
if ($pesan === "") {
    $eror[] = "Pesan harus diisi!"; 
    /*pesan*/
} elseif (strlen($pesan) < 10) {
    $eror[] = "Pesan minimal 10 karakter!";
}

if (!empty($eror)) {
    $_SESSION["sinar_error"] = implode("<br>", $eror);
    $_SESSION["old"] = compact("nama", "email", "pesan");
    redirect_ke("index.php#contact");
    exit;
}


$sql = "INSERT INTO tbl_tamu (cnama, cemail, cpesan) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    $_SESSION['sinar_error'] = 'Terjadi kesalahan sistem.';
    redirect_ke('index.php#contact');
    exit;
}

mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $pesan);

if (mysqli_stmt_execute($stmt)) {
    unset($_SESSION["old"]);
    $_SESSION["sinar_sukses"] = "Terima kasih, pesan Anda telah kami terima.";
    redirect_ke("index.php#contact");
    exit;
} else {
  $_SESSION['old'] = [
    'nama' => $nama,
    'email' => $email,
    'pesan' => $pesan
  ];
  $_SESSION["sinar_error"] = "Gagal mengirim pesan. Silakan coba lagi.";
  redirect_ke("index.php#contact");
  exit;
}
mysqli_stmt_close($stmt);


$arrBiodata = [
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
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about");
