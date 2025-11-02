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

        $nilaiAkhir1 = (0.1 * $nilaihadir1) + (0.2 * $nilaitugas1) + (0.3 * $nilaiuts1) + (0.4 * $nilaiuas1);
        $nilaiAkhir2 = (0.1 * $nilaihadir2) + (0.2 * $nilaitugas2) + (0.3 * $nilaiuts2) + (0.4 * $nilaiuas2);
        $nilaiAkhir3 = (0.1 * $nilaihadir3) + (0.2 * $nilaitugas3) + (0.3 * $nilaiuts3) + (0.4 * $nilaiuas3);
        $nilaiAkhir4 = (0.1 * $nilaihadir4) + (0.2 * $nilaitugas4) + (0.3 * $nilaiuts4) + (0.4 * $nilaiuas4);
        $nilaiAkhir5 = (0.1 * $nilaihadir5) + (0.2 * $nilaitugas5) + (0.3 * $nilaiuts5) + (0.4 * $nilaiuas5);

        if ($nilaihadir1 < 70){ 
            $grade1="E";
            $mutu1="0.00";
            $status1="Gagal";
        } else {
            if ($nilaiAkhir1>=91){
                $grade1="A";
                $mutu1=4.00;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=81){
                $grade1="A-";
                $mutu1=3.70;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=76){
                $grade1="B+";
                $mutu1=3.30;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=71){
                $grade1="B";
                $mutu1=3.00;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=66){
                $grade1="B-";
                $mutu1=2.70;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=61){
                $grade1="C+";
                $mutu1=2.30;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=56){
                $grade1="C";
                $mutu1=2.00;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=51){
                $grade1="C-";
                $mutu1=1.70;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=36){
                $grade1="D";
                $mutu1=1.00;
                $status1="Gagal";
            } elseif
                ($nilaiAkhir1>=0){
                $grade1="E";
                $mutu1=0.00;
                $status1="Gagal";
            }
        }

         if ($nilaihadir2 < 70){ 
            $grade2="E";
            $mutu2="0.00";
            $status2="Gagal";
        } else {
            if ($nilaiAkhir2>=91){
                $grade2="A";
                $mutu2=4.00;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=81){
                $grade2="A-";
                $mutu2=3.70;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=76){
                $grade2="B+";
                $mutu2=3.30;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=71){
                $grade2="B";
                $mutu2=3.00;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=66){
                $grade2="B-";
                $mutu2=2.70;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=61){
                $grade2="C+";
                $mutu2=2.30;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=56){
                $grade2="C";
                $mutu2=2.00;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=51){
                $grade2="C-";
                $mutu2=1.70;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=36){
                $grade2="D";
                $mutu2=1.00;
                $status2="Gagal";
            } elseif 
                ($nilaiAkhir2>=0){
                $grade2="E";
                $mutu2=0.00;
                $status2="Gagal";
            }
        }

                if ($nilaihadir3 < 70){ 
            $grade3 = "E";
            $mutu3 = 0.00;
            $status3 = "Gagal";
        } else {
            if ($nilaiAkhir3 >= 91) {
                $grade3 = "A"; $mutu3 = 4.00; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 81) {
                $grade3 = "A-"; $mutu3 = 3.70; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 76) {
                $grade3 = "B+"; $mutu3 = 3.30; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 71) {
                $grade3 = "B"; $mutu3 = 3.00; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 66) {
                $grade3 = "B-"; $mutu3 = 2.70; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 61) {
                $grade3 = "C+"; $mutu3 = 2.30; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 56) {
                $grade3 = "C"; $mutu3 = 2.00; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 51) {
                $grade3 = "C-"; $mutu3 = 1.70; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 36) {
                $grade3 = "D"; $mutu3 = 1.00; $status3 = "Gagal";
            } elseif 
                    ($nilaiAkhir3>= 0) { $grade3 = "E"; $mutu3 = 0.00; $status3 = "Gagal";
            }
        }

                if ($nilaihadir4 < 70){ 
            $grade4 = "E";
            $mutu4 = 0.00;
            $status4 = "Gagal";
        } else {
            if ($nilaiAkhir4 >= 91) {
                $grade4 = "A"; $mutu4 = 4.00; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 81) {
                $grade4 = "A-"; $mutu4 = 3.70; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 76) {
                $grade4 = "B+"; $mutu4 = 3.30; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 71) {
                $grade4 = "B"; $mutu4 = 3.00; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 66) {
                $grade4 = "B-"; $mutu4 = 2.70; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 61) {
                $grade4 = "C+"; $mutu4 = 2.30; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 56) {
                $grade4 = "C"; $mutu4 = 2.00; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 51) {
                $grade4 = "C-"; $mutu4 = 1.70; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 36) {
                $grade4 = "D"; $mutu4 = 1.00; $status4 = "Gagal";
            } elseif ($nilaiAkhir4>=0) {
                $grade4 = "E"; $mutu4 = 0.00; $status4 = "Gagal";
            }
        }

                if ($nilaihadir5 < 70){ 
            $grade5 = "E";
            $mutu5 = 0.00;
            $status5 = "Gagal";
        } else {
            if ($nilaiAkhir5 >= 91) {
                $grade5 = "A"; $mutu5 = 4.00; $status5 = "Lulus";
            } elseif ($nilaiAkhir5 >= 81) {
                $grade5 = "A-"; $mutu5 = 3.70; $status5 = "Lulus";
            } elseif ($nilaiAkhir5 >= 76) {
                $grade5 = "B+"; $mutu5 = 3.30; $status5 = "Lulus";
            } elseif ($nilaiAkhir5 >= 71) {
                $grade5 = "B"; $mutu5 = 3.00; $status5 = "Lulus";
            } elseif ($nilaiAkhir5 >= 66) {
                $grade5 = "B-"; $mutu5 = 2.70; $status5 = "Lulus";
            } elseif ($nilaiAkhir5 >= 61) {
                $grade5 = "C+"; $mutu5 = 2.30; $status5 = "Lulus";
            } elseif ($nilaiAkhir5 >= 56) {
                $grade5 = "C"; $mutu5 = 2.00; $status5 = "Lulus";
            } elseif ($nilaiAkhir5 >= 51) {
                $grade5 = "C-"; $mutu5 = 1.70; $status5 = "Lulus";
            } elseif ($nilaiAkhir5 >= 36) {
                $grade5 = "D"; $mutu5 = 1.00; $status5 = "Gagal";
            } elseif ($nilaiAkhir5>= 0) {
                $grade5 = "E"; $mutu5 = 0.00; $status5 = "Gagal";
            }
        }

        $bobot1=$mutu1 * $sksmatkul1;
        $bobot2=$mutu2 * $sksmatkul2;
        $bobot3=$mutu3 * $sksmatkul3;
        $bobot4=$mutu4 * $sksmatkul4;
        $bobot5=$mutu5 * $sksmatkul5;

        ?>

        <h2>Nilai Saya</h2>
        
        <div class="matkul1"> <p>Matakuliah 1</p></div>
        <p><strong>Nama MataKuliah 1:</strong> <?php echo $namamatkul1; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul1; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir1; ?> </p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas1; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts1; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas1; ?></p>
        <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir1; ?></p>
        <p><strong>Grade:</strong> <?php echo $grade1; ?></p>
        <p><strong>Angka Mutu:</strong> <?php echo $mutu1; ?></p>
        <p><strong>Bobot:</strong> <?php echo $bobot1; ?></p>
        <p><strong>Status:</strong> <?php echo $status1; ?></p>
        
        <div class= "matkul2"><p>MataKuliah 2</p></div>
        <p><strong>Nama MataKuliah 2:</strong> <?php echo $namamatkul2; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul2; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir2; ?></p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas2; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts2; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas2; ?></p>
        <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir2; ?></p>
        <p><strong>Grade:</strong> <?php echo $grade2; ?></p>
        <p><strong>Angka Mutu:</strong> <?php echo $mutu2; ?></p>
        <p><strong>Bobot:</strong> <?php echo $bobot2; ?></p>
        <p><strong>Status:</strong> <?php echo $status2; ?></p>

        <div class= "matkul3"><p>MataKuliah 3</p></div>
        <p><strong>Nama MataKuliah 3:</strong> <?php echo $namamatkul3; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul3; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir3; ?></p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas3; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts3; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas3; ?></p>
         <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir3; ?></p>
        <p><strong>Grade:</strong> <?php echo $grade3; ?></p>
        <p><strong>Angka Mutu:</strong> <?php echo $mutu3; ?></p>
        <p><strong>Bobot:</strong> <?php echo $bobot3; ?></p>
        <p><strong>Status:</strong> <?php echo $status3; ?></p>
        
        <div class= "matkul4"><p>MataKuliah 4</p></div>
        <p><strong>Nama MataKuliah 4:</strong> <?php echo $namamatkul4; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul4; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir4; ?></p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas4; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts4; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas4; ?></p>
         <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir4; ?></p>
        <p><strong>Grade:</strong> <?php echo $grade4; ?></p>
        <p><strong>Angka Mutu:</strong> <?php echo $mutu4; ?></p>
        <p><strong>Bobot:</strong> <?php echo $bobot4; ?></p>
        <p><strong>Status:</strong> <?php echo $status4; ?></p>
      
        <div class= "matkul5"><p>MataKuliah 5</p></div>
        <p><strong>Nama MataKuliah 5:</strong> <?php echo $namamatkul5; ?></p>
        <p><strong>SKS:</strong> <?php echo $sksmatkul5; ?></p>
        <p><strong>Kehadiran:</strong> <?php echo $nilaihadir5; ?></p>
        <p><strong>Tugas:</strong> <?php echo $nilaitugas5; ?></p>
        <p><strong>UTS:</strong> <?php echo $nilaiuts5; ?></p>
        <p><strong>UAS:</strong> <?php echo $nilaiuas5; ?></p>
         <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir5; ?></p>
        <p><strong>Grade:</strong> <?php echo $grade5; ?></p>
        <p><strong>Angka Mutu:</strong> <?php echo $mutu5; ?></p>
        <p><strong>Bobot:</strong> <?php echo $bobot5; ?></p>
        <p><strong>Status:</strong> <?php echo $status5; ?></p>
        
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