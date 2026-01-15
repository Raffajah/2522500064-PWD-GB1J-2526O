<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  /*
    Ambil nilai cid dari GET dan lakukan validasi untuk 
    mengecek cid harus angka dan lebih besar dari 0 (> 0).
    'options' => ['min_range' => 1] artinya cid harus ≥ 1 
    (bukan 0, bahkan bukan negatif, bukan huruf, bukan HTML).
  */
  $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);
  /*
    Skrip di atas cara penulisan lamanya adalah:
    $cid = $_GET['cid'] ?? '';
    $cid = (int)$cid;

    Cara lama seperti di atas akan mengambil data mentah 
    kemudian validasi dilakukan secara terpisah, sehingga 
    rawan lupa validasi. Untuk input dari GET atau POST, 
    filter_input() lebih disarankan daripada $_GET atau $_POST.
  */

  /*
    Cek apakah $cid bernilai valid:
    Kalau $cid tidak valid, maka jangan lanjutkan proses, 
    kembalikan pengguna ke halaman awal (read.php) sembari 
    mengirim penanda error.
  */
  if (!$id) {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('bacabiodata.php');
  }

  /*
    Ambil data lama dari DB menggunakan prepared statement, 
    jika ada kesalahan, tampilkan penanda error.
  */
  $stmt = mysqli_prepare($conn, "SELECT id, bnim, bnama_lengkap, btempat_lahir, btanggal_lahir, bhobi,
 bpasangan, bpekerjaan, bnama_ortu, bnama_kakak, bnama_adik
 FROM tbl_mahasiswa_sederhana WHERE id = ? LIMIT 1");
  if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    redirect_ke('bacabiodata.php');
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($res);
  mysqli_stmt_close($stmt);

  if (!$row) {
    $_SESSION['flash_error'] = 'Record tidak ditemukan.';
    redirect_ke('bacabiodata.php');
  }

  #Nilai awal (prefill form)
  $txtNim  = $row['bnim'] ?? '';
  $txtNmLengkap = $row['bnama_lengkap'] ?? '';
  $txtT4Lhr = $row['btempat_lahir'] ?? '';
    $txtTglLhr = $row['btanggal_lahir'] ?? '';
    $txtHobi = $row['bhobi'] ?? '';
    $txtPasangan = $row['bpasangan'] ?? '';
    $txtKerja = $row['bpekerjaan'] ?? '';
    $txtNmOrtu = $row['bnama_ortu'] ?? '';
    $txtNmKakak = $row['bnama_kakak'] ?? '';
    $txtNmAdik = $row['bnama_adik'] ?? '';

  #Ambil error dan nilai old input kalau ada
  $flash_error = $_SESSION['flash_error'] ?? '';
  $old_biodata = $_SESSION['old_biodata'] ?? [];
  unset($_SESSION['flash_error'], $_SESSION['old_biodata']);
  if (!empty($old_biodata)) {
    $txtNim  = $old_biodata['txtNim'] ?? $txtNim;
    $txtNmLengkap = $old_biodata['txtNmLengkap'] ?? $txtNmLengkap;
    $txtT4Lhr = $old_biodata['txtT4Lhr'] ?? $txtT4Lhr;
    $txtTglLhr = $old_biodata['txtTglLhr'] ?? $txtTglLhr;
    $txtHobi = $old_biodata['txtHobi'] ?? $txtHobi;
    $txtPasangan = $old_biodata['txtPasangan'] ?? $txtPasangan;
    $txtKerja = $old_biodata['txtKerja'] ?? $txtKerja;
    $txtNmOrtu = $old_biodata['txtNmOrtu'] ?? $txtNmOrtu;
    $txtNmKakak = $old_biodata['txtNmKakak'] ?? $txtNmKakak;
    $txtNmAdik = $old_biodata['txtNmAdik'] ?? $txtNmAdik;
  }
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Biodata Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>

<body style="background: url('wallpaperflare.com_wallpaper\ \(9\).jpg') no-repeat center center fixed; background-size: cover;">
<header>
  <h1>Ini Header</h1>
</header>

<main>
<section id="biodata">
  <h2>Edit Biodata Mahasiswa</h2>

  <?php if (!empty($flash_error)): ?>
    <div style="padding:10px; margin-bottom:10px;
      background:#f8d7da; color:#721c24; border-radius:6px;">
      <?= $flash_error; ?>
    </div>
  <?php endif; ?>

  <form action="proses_update_biodata.php" method="POST">

    <input type="hidden" name="id" value="<?= (int)$id; ?>">

    <label>
    <span>NIM</span>
    <input type="text" name="txtNim"
      placeholder="Masukkan NIM"
      value="<?= htmlspecialchars($txtNim); ?>"
      required>
  </label>

    <label>
    <span>Nama Lengkap</span>
    <input type="text" name="txtNmLengkap"
      placeholder="Masukkan nama lengkap"
      value="<?= htmlspecialchars($txtNmLengkap); ?>"
      required>
  </label>

  <label>
    <span>Tempat Lahir</span>
    <input type="text" name="txtT4Lhr"
      placeholder="Masukkan tempat lahir"
      value="<?= htmlspecialchars($txtT4Lhr); ?>"
      required>
  </label>

  <label>
    <span>Tanggal Lahir</span>
    <input type="text" name="txtTglLhr"
      value="<?= htmlspecialchars($txtTglLhr); ?>"
      required>
  </label>

  <label>
    <span>Hobi</span>
    <input type="text" name="txtHobi"
      placeholder="Masukkan hobi"
      value="<?= htmlspecialchars($txtHobi); ?>"
      required>
  </label>

  <label>
    <span>Pasangan</span>
    <input type="text" name="txtPasangan"
      placeholder="Masukkan nama pasangan"
      value="<?= htmlspecialchars($txtPasangan); ?>"
      required>
  </label>

  <label>
    <span>Pekerjaan</span>
    <input type="text" name="txtKerja"
      placeholder="Masukkan pekerjaan"
      value="<?= htmlspecialchars($txtKerja); ?>"
      required>
  </label>

  <label>
    <span>Nama Orang Tua</span>
    <input type="text" name="txtNmOrtu"
      placeholder="Masukkan nama orang tua"
      value="<?= htmlspecialchars($txtNmOrtu); ?>"
      required>
  </label>

  <label>
    <span>Nama Kakak</span>
    <input type="text" name="txtNmKakak"
      placeholder="Masukkan nama kakak"
      value="<?= htmlspecialchars($txtNmKakak); ?>"
      required>
  </label>

  <label>
    <span>Nama Adik</span>
    <input type="text" name="txtNmAdik"
      placeholder="Masukkan nama adik"
      value="<?= htmlspecialchars($txtNmAdik); ?>"
      required>
  </label>>

    <button type="submit">Update</button>
    <button type="reset">Batal</button>
    <a href="bacabiodata.php">Kembali</a>
  </form>
</section>
</main>
<script src="script.js"></script>
</body>
</html>