<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"])  ){
      // redirect
      header("Location: latihan3-s.php");
      exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h2>Detail Mahasiswa</h2>
  <ul>
    <li>Nama: <?= ($_POST['nama'] ?? 'Unknown'); ?></li>
    <li>NIM: <?= ($_POST['nim'] ?? 'Unknown'); ?></li>
    <li>Email: <?= ($_POST['email'] ?? 'Unknown'); ?></li>
    <li>Jurusan: <?= ($_POST['jurusan'] ?? 'Unknown'); ?></li>
  </ul>
</body>

</html>