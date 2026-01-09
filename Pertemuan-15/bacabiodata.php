<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM tbl_mahasiswa_sederhana ORDER BY id DESC";
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

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>ID</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Tempat lahir</th>
    <th>Tanggal lahir</th>
    <th>Hobi</th>
    <th>Pasangan</th>
    <th>Pekerjaan</th>
    <th>Nama Orang Tua</th>
    <th>Nama kakak</th>
    <th>Nama adik</th>
  </tr>
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="edit.php?cid=<?= (int)$row['cid']; ?>">Edit</a>
        <a onclick="return confirm('Hapus <?= htmlspecialchars($row['cnama']); ?>?')" href="proses_delete.php?cid=<?= (int)$row['cid']; ?>">Delete</a>
      </td>
      <td><?= $row['id']; ?></td>
      <td><?= htmlspecialchars($row['bnim']); ?></td>
      <td><?= htmlspecialchars($row['bnama_lengkap']); ?></td>
      <td><?= htmlspecialchars($row['btempat_lahir']); ?></td>
      <td><?= htmlspecialchars($row['btanggal_lahir']); ?></td>
      <td><?= htmlspecialchars($row['bhobi']); ?></td>
      <td><?= htmlspecialchars($row['bpasangan']); ?></td>
      <td><?= htmlspecialchars($row['bpekerjaan']); ?></td>
      <td><?= htmlspecialchars($row['bnama_ortu']); ?></td>
      <td><?= htmlspecialchars($row['bnama_kakak']); ?></td>
      <td><?= htmlspecialchars($row['bnama_adik']); ?></td>
    </tr>
  <?php endwhile; ?>
</table>