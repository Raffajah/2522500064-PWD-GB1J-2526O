<?php session_start();


$akunama = $_SESSION["txtNama"];
$akuemail = $_SESSION["txtEmail"];
$akuusia = $_SESSION["txtUsia"];
$akuhobi = $_SESSION["txtHobi"];
$akulokasi = $_SESSION["txtLokasi"];
$akugender = $_SESSION["txtGender"];
$akunim = $_SESSION["txtNim"];
$akujam = $_SESSION["txtJam"];
$akusuka = $_SESSION["txtSuka"];
$akupesan = $_SESSION["txtPesan"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="nilai.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
        <li><a href="#nilai">nilai</a></li>
      </ul>
    </nav>
  </header>

  <main>
    

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="prosesnilai.php" method="GET">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>
        <label for="txtUsia"><span>usia:</span>
          <input type="usia" id="txtUsia" name="txtUsia" placeholder="Masukkan usia" required autocomplete="usia">
        </label>
        <label for="txtHobi"><span>Hobi:</span>
          <input type="hobi" id="txtHobi" name="txtHobi" placeholder="Masukkan hobi" required autocomplete="hobi">
        </label>
        <label for="txtLokasi"><span>Lokasi:</span>
          <input type="lokasi" id="txtLokasi" name="txtLokasi" placeholder="Masukkan lokasi" required autocomplete="lokasi">
        </label>
        <label for="txtGender"><span>Gender:</span>
          <input type="Gender" id="txtGender" name="txtGender" placeholder="Masukkan gender" required autocomplete="gender">
        </label>
        <label for="txtNim"><span>Nim:</span>
          <input type="nim" id="txtNim" name="txtNim" placeholder="Masukkan nim" required autocomplete="nim">
        </label>
        <label for="txtJam"><span>Jam:</span>
          <input type="jam" id="txtJam" name="txtJam" placeholder="Masukkan jam" required autocomplete="jam">
        </label>
        <label for="txtSuka"><span>Suka:</span>
          <input type="suka" id="txtSuka" name="txtSuka" placeholder="Masukkan suka" required autocomplete="suka">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
    </section>
    <section id="nilai">
      
        <h2> halo semua </h2>
        <p>Nama <?php echo $akunama; ?> </p>
        <p>Nim <?php echo $akunim; ?></p>
        <p>Jam <?php echo $akujam; ?></p>
        <p>Gender <?php echo $akugender; ?></p>
        <p>Lokasi <?php echo $akulokasi; ?></p>
        <p>Suka Siapa <?php echo $akusuka; ?></p>
        <p>Hobi apa <?php echo $akuhobi; ?></p>
        <p>Usia berapa <?php echo $akuusia; ?></p>
        <p>Email mu apa <?php echo $akuemail; ?></p>
        <p>Pesan kamu apa <?php echo $akupesan; ?></p>
    </section>
    </main>

  <footer>
    <p>&copy; Rafa Alghifari</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>