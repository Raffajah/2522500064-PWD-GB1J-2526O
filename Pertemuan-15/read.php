<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM tbl_tamu ORDER BY cid DESC";
  $q = mysqli_query($conn, $sql);
  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>

<?php
  $flash_sukses = $_SESSION['flash_sukses'] ?? ''; #jika query sukses
  $flash_error  = $_SESSION['flash_error'] ?? ''; #jika ada error
  #bersihkan session ini
  unset($_SESSION['flash_sukses'], $_SESSION['flash_error']); 
?>

<?php if (!empty($flash_sukses)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#d4edda; color:#155724; border-radius:6px;">
          <?= $flash_sukses; ?>
        </div>
<?php endif; ?>

<?php if (!empty($flash_error)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#f8d7da; color:#721c24; border-radius:6px;">
          <?= $flash_error; ?>
        </div>
<?php endif; ?>
<style>
  body {
    margin: 0;
    padding: 20px;
    background-image: url("png-for-mesmerizer-v0-v826kvz0qtid1.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family:'Times New Roman', Times, serif;
  }
table {
  width: 100%;
  border-collapse: collapse;
  background: rgba(255, 255, 255, 0.9);
  border-radius: 10px;
  overflow: hidden;
}

th {
  background: #0f27a0;
  color: #fff;
  text-align: center;
}

th, td {
  padding: 10px;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: #f1f5ff;
}
  
  a {
    margin-right: 8px;
    text-decoration: none;
    color: #000000;
    border: 2px solid #0f27a0;
  }

   a:hover {
    text-decoration: none;
    cursor: pointer;
    border-radius: 6px;
    background-color: #0f27a0;
    color: aqua;
  }
  .btn-back {
  display: inline-block;
  margin-top: 15px;
  padding: 10px 16px;
  background: #0f27a0;
  color: #fff;
  border-radius: 8px;
  font-weight: bold;
}

.btn-back:hover {
  background: #091a70;
}

</style>
<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Pesan</th>
    <th>Created At</th>
  </tr>
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="edit.php?cid=<?= (int)$row['cid']; ?>">Edit</a>
        <a onclick="return confirm('Hapus <?= htmlspecialchars($row['cnama']); ?>?')" href="proses_delete.php?cid=<?= (int)$row['cid']; ?>">Delete</a>
      </td>
      <td><?= $row['cid']; ?></td>
      <td><?= htmlspecialchars($row['cnama']); ?></td>
      <td><?= htmlspecialchars($row['cemail']); ?></td>
      <td><?= nl2br(htmlspecialchars($row['cpesan'])); ?></td>
      <td><?= formatTanggal(htmlspecialchars($row['dcreated_at'])); ?></td>
    </tr>
  <?php endwhile; ?>
</table>
<br>
<button class="btn-back"><a href="index.php">Kembali ke Beranda</a></button>