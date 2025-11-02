<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="headercontainer">
        <button class="menu-togle" id="menutoggle"aria-label="Toggle Navigation">&#9776;</button>
         <h1>Halo Semua ^w^</h1>
        <img src="220290.gif" alt="..." class="miku">
        </div>
            <nav>
                <ul>
                    <li> <a href="#home">Beranda</a></li>
                    <li> <a href="#about">Tentang</a></li>
                    <li> <a href="#contact">Kontak</a></li>
                    <li> <a href="#ipk">Nilai</a></li>
                </ul>
            </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang di web saya.</h2>
            <?php echo "ini rafa yang berbicara dengan pengetikan php. <br> ";
            echo "kayak ni ternyata php oq rada lupa ku nambah echo e hha"; ?>
        </section>
        <section id ="about">
            <?php
            $Nim = '2522500064';
            $Nama = 'Rafa Alghifari';
            $Tempatlahir = 'Pangkalpinang';
            $Tanggallahir = '12 November 2006';
            $Hoby = 'Menggambar';
            $Pasangan = 'kagak ada';
            $Pekerjaan = 'Pengusaha sukses';
            $Namaibu = 'Umi Kalsum';
            $Namaayah = 'Agus Widiyanto';
            $Namaadek = 'Retno Dwi Ayu dan Garini Puspa Ayu';
            ?>
        <h2>Tentang Saya </h2>
        <p><strong>Nim :</strong><?php echo $Nim; ?> &#128221;</p>
        <p><strong>Nama Lengkap :</strong> <?php echo $Nama; ?> &#129487;</p>
        <p><strong>Tempat Lahir :</strong> <?php echo $Tempatlahir; ?>&#127751;</p>
        <p><strong>Tanggal Lahir :</strong> <?php echo $Tanggallahir; ?>&#128292;</p>
        <p><strong>Hobby :</strong> <?php echo $Hoby; ?>&#128526;</p>
        <p><strong>Pasangan :</strong> <?php echo $Pasangan; ?>&#128516;</p>
        <p><strong>Pekerjaan :</strong> <?php echo $Pekerjaan; ?>&#128513;</p>
        <p><strong>Nama Ayah :</strong> <?php echo $Namaayah; ?>&#128104;</p>
        <p><strong>Nama Ibu :</strong> <?php echo $Namaibu; ?>&#128105;</p>
        <P><strong>Nama Adek :</strong> <?php echo $Namaadek;?> &#128103;</P>
    </section>
        <section id="ipk">
        <?php 
            $namamatkul1='Aplikasi Perkantoran';
        $sksmatkul1='3';
        $nilaihadir1='90';
        $nilaitugas1='60';
        $nilaiuts1='80';
        $nilaiuas1='70';
            $namamatkul2='Logika Informatika';
        $sksmatkul2='3';
        $nilaihadir2='70';
        $nilaitugas2='50';
        $nilaiuts2='60';
        $nilaiuas2='80';
            $namamatkul3='Pengantar Basis Data';
        $sksmatkul3='3';
        $nilaihadir3='80';
        $nilaitugas3='70';
        $nilaiuts3='70';
        $nilaiuas3='90';
            $namamatkul4='Pengantar Teknologi';
        $sksmatkul4='3';
        $nilaihadir4='90';
        $nilaitugas4='90';
        $nilaiuts4='90';
        $nilaiuas4='90';
         $namamatkul5='Pemrograman Web Dasar';
        $sksmatkul5='3';
        $nilaihadir5='80';
        $nilaitugas5='80';
        $nilaiuts5='80';
        $nilaiuas5='80';
        ?>

        <h2>Nilai Saya</h2>

        <p><strong>Nama MataKuliah 1:</strong> <?php echo $namamatkul1; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul1; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir1; ?> </p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas1; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts1; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas1; ?></p>
        
 
        <p><strong>Nama MataKuliah 2:</strong> <?php echo $namamatkul2; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul2; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir2; ?></p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas2; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts2; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas2; ?></p>

        
        <p><strong>Nama MataKuliah 3:</strong> <?php echo $namamatkul3; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul3; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir3; ?></p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas3; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts3; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas3; ?></p>
        
        <p><strong>Nama MataKuliah 4:</strong> <?php echo $namamatkul4; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul4; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir4; ?></p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas4; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts4; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas4; ?></p>
        
      
        <p><strong>Nama MataKuliah 5:</strong> <?php echo $namamatkul5; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul5; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir5; ?></p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas5; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts5; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas5; ?></p>
        
    </section>
     <section id="contact">
    <h2>Kontak</h2>
   <form action="" method="get">
    <label for="txtNama"><span>Nama:</span>
    <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan Nama" required autocomplete="name"></label>
    <label for="txtEmail"><span>Email:</span>
    <input type="text" id="txtEmail" name="txtEmail" placeholder="Masukkan Email" required autocomplete="email"></label>
    <label for="txtPesan"><span>Pesan:</span>
    <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis Pesan Anda..." required></textarea>
    <small id="charCount">0/200 Karakter</small></label>
    <button type="submit">Kirim</button>
    <button type="reset">Batal</button>
</form>
</section>
    </main>
    <footer>
        <p>&copy; 2025 Rafa Alghifari [2522500064]</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>