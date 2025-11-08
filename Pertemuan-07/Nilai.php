<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    section h2 {
text-align: center;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <h2>Form isi</h2>
            <form action="prosesnilai.php" method="GET">

                 <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan Nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan Email Anda" required autocomplete="email">
        </label>

        <label for="txtGender"><span>Gender:</span>
          <input type="gender" id="txtGender" name="txtGender" placeholder="Masukkan Gender Anda" required autocomplete="email">
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>

            </form>
        </section>
    </main>
</body>
</html>