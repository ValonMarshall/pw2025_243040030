<?php 

// Nested array / array dalam array / array bersarang

$mahasiswa = [
    ['Dion', '243040030', 'dionavalon32238@gmail.com', 'Teknik Informatika'],
    ['Rin', '243040011', 'rin238@gmail.com', 'Teknik Industri', [58, 100, 40]]

];

// echo $mahasiswa [1][2];
// echo $mahasiswa [0][1];
// echo $mahasiswa [1][4][2];

// Array Assosciative



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>