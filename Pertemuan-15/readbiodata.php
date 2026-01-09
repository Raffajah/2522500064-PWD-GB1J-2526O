<?
require 'koneksi.php';
session_start();
    $fieldConfig = [
      "nim" => ["label" => "NIM:", "suffix" => ""],
      "nama" => ["label" => "Nama Lengkap:", "suffix" => " &#128526;"],
      "tempat" => ["label" => "Tempat Lahir:", "suffix" => ""],
      "tanggal" => ["label" => "Tanggal Lahir:", "suffix" => ""],
      "hobi" => ["label" => "Hobi:", "suffix" => " &#127926;"],
      "pasangan" => ["label" => "Pasangan:", "suffix" => " &hearts;"],
      "pekerjaan" => ["label" => "Pekerjaan:", "suffix" => " &copy; 2025"],
      "ortu" => ["label" => "Nama Orang Tua:", "suffix" => ""],
      "kakak" => ["label" => "Nama Kakak:", "suffix" => ""],
      "adik" => ["label" => "Nama Adik:", "suffix" => ""],
    ];
    $sql = "SELECT * FROM tbl_mahasiswa_sederhana ORDER BY cid DESC";
$q = mysqli_query($conn, $sql);
if (!$q) {
  echo "<p>Gagal membaca data mahasiswa: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
} elseif (mysqli_num_rows($q) === 0) {
  echo "<p>Belum ada data mahasiswa yang tersimpan.</p>";
} else {
  while ($row = mysqli_fetch_assoc($q)) {
    $arrBiodata = [
      "nim" => $row["dnim"] ?? "",
      "nama" => $row["dnama"] ?? "",
      "tempat" => $row["dtempat_lahir"] ?? "",
      "tanggal" => $row["dtanggal_lahir"] ?? "",
      "hobi" => $row["dhobi"] ?? "",
      "pasangan" => $row["dpasangan"] ?? "",
      "pekerjaan" => $row["dpekerjaan"] ?? "",
      "ortu" => $row["dnama_ortu"] ?? "",
      "kakak" => $row["dnama_kakak"] ?? "",
      "adik" => $row["dnama_adik"] ?? "",
    ];
    echo tampilkanBiodata($fieldConfig, $arrBiodata);
  }
}
    ?>