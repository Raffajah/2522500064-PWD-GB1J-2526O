<?php
session_start();
require_once "koneksi.php";
require_once "fungsi.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $_SESSION["error"] = "Akses tidak valid!";
    redirect_ke("index.php#contact");
    exit;
}

$nama  = bersihkan($_POST["txtNama"] ?? '');
$email = bersihkan($_POST["txtEmail"] ?? '');
$pesan = bersihkan($_POST["txtPesan"] ?? '');
$captcha = bersihkan($_POST["captcha"] ?? '');
$errors = [];


if ($captcha === '') {
    $errors[] = "Captcha harus diisi!";
} elseif ($captcha != 5)  {
    $errors[] = "Jawaban captcha salah!";
}


if ($nama === '') {
    $errors[] = "Nama harus diisi!";
    
}elseif (strlen($nama) < 3) {
    $errors[] = "Nama minimal 3 karakter!";
}

if ($email === '') {
    $errors[] = "Email harus diisi!";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid!";
}
if ($pesan === '') {
    $errors[] = "Pesan harus diisi!"; 
    
} elseif (strlen($pesan) < 10) {
    $errors[] = "Pesan minimal 10 karakter!";
}

if (!empty($errors)) {
    $_SESSION["sinar_error"] = implode("<br>", $errors);
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
