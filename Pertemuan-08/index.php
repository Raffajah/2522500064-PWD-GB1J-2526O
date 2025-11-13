<?php
session_start();

$sesnim = $_SESSION["txtnim"] ?? "";
$sesnamalengkap = $_SESSION["txtnamalengkap"] ?? "";
$sestempatlahir = $_SESSION["txttempatlahir"] ?? "";
$sestanggallahir = $_SESSION["txttanggallahir"] ?? "";
$seshobi = $_SESSION["txthobi"] ?? "";
$sespasangan = $_SESSION["txtpasangan"] ?? "";
$sespekerjaan = $_SESSION["txtpekerjaan"] ?? "";
$sesnamaorangtua = $_SESSION["txtnamaorangtua"] ?? "";
$sesnamakakak = $_SESSION["txtnamakakak"] ?? "";
$sesnamaadik = $_SESSION["txtnamaadik"] ?? "";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
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
        <li><a href="#biodata">Biodata</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>
      <section id= "biodata">
      <form action="proses.php"  method="POST">
         <h2>Biodata saya</h2>

        <label for="txtNim"><span>Nim:</span>
          <input type="text" id="txtnim" name="txtNim" placeholder="Masukkan nim" required autocomplete="nim">
        </label>
        <label for="txtNamalengkap"><span>Nama Lengkap:</span>
          <input type="text" id="txtnamalengkap" name="txtNamalengkap" placeholder="Masukkan nama lengkap" required autocomplete="namelengkap">
        </label>
        <label for="txtTempatlahir"><span>Tempatlahir:</span>
          <input type="text" id="txttempatlahir" name="txtTempatlahir" placeholder="Masukkan tempat lahir" required autocomplete="tempatlahir">
        </label>
        <label for="txtTanggallahir"><span>Tanggallahir:</span>
          <input type="text" id="txttanggallahir" name="txtTanggallahir" placeholder="Masukkan tanggal lahir" required autocomplete="tanggallahir">
        </label>
        <label for="txtHobi"><span>Hobi:</span>
          <input type="text" id="txthobi" name="txtHobi" placeholder="Masukkan hobi" required autocomplete="hobi">
        </label>
        <label for="txtPasangan"><span>Pasangan:</span>
          <input type="text" id="txtpasangan" name="txtPasangan" placeholder="Masukkan pasangan" required autocomplete="pasangan">
        </label>
        <label for="txtPekerjaan"><span>Pekerjaan:</span>
          <input type="text" id="txtpekerjaan" name="txtPekerjaan" placeholder="Masukkan pekerjaan" required autocomplete="pekerjaan">
        </label>
        <label for="txtNamaorangtua"><span>Nama Orang Tua:</span>
          <input type="text" id="txtnamaorangtua" name="txtNamaorangtua" placeholder="Masukkan nama orang tua" required autocomplete="namaorangtua">
        </label>
        <label for="txtNamakakak"><span>Nama Kakak:</span>
          <input type="text" id="txtnamakakak" name="txtNamakakak" placeholder="Masukkan nama kakak" required autocomplete="namakakak">
        </label>
        <label for="txtNamaadik"><span>Nama Adik:</span>
          <input type="text" id="txtnamaadik" name="txtNamaadik" placeholder="Masukkan nama adik" required autocomplete="namaadik">
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
        

      </form>

      </section>
    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $nim;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $sesnamalengkap;
        ?> &#128526;
      </p>

      <p><strong>Tempat Lahir:</strong> <?php echo $sestempatlahir; ?></p>
      <p><strong>Tanggal Lahir:</strong><?php echo $sestanggallahir?></p>
      <p><strong>Hobi:</strong> <?php echo $seshobi?> &#127926;</p>
      <p><strong>Pasangan:</strong> <?php echo $sespasangan?>&hearts;</p>
      <p><strong>Pekerjaan:</strong> <?php echo $sespekerjaan?> &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong> <?php echo $sesnamaorangtua?></p>
      <p><strong>Nama Kakak:</strong><?php echo $sesnamakakak?></p>
      <p><strong>Nama Adik:</strong> <?php echo $sesnamaadik ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>