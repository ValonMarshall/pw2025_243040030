<?php 

// Nested array / array dalam array / array bersarang

$mahasiswa = [
    ['Dion', '243040030', 'dionavalon32238@gmail.com', 'Teknik Informatika'],
    ['Rin', '243040011', 'rin238@gmail.com', 'Teknik Industri', [58, 100, 40]]

];

// echo $mahasiswa [1][2];
// echo $mahasiswa [0][1];
// echo $mahasiswa [1][4][2];

// Array Associative, keynya string buatan sendiri
$mahasiswa2 = [
    ['nama' => 'Dion',
    'nrp' => '243040030',
    'email' => 'dionavalon32238@gmail.com',
    'jurusan' => 'Teknik Informatika',
    'gambar' => 'Defender.png'
    ],

    ['nama' => 'Roy',
    'nrp' => '201040080',
    'email' => 'kalon928@gmail.com',
    'jurusan' => 'Teknik Industri',
    'gambar' => 'Caster.png'
    ]
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Daftar Mahasiswa dengan Array numerik</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>


    <h2>Daftar Mahasiswa dengan Array Associative</h2>
    <?php foreach ($mahasiswa2 as $m2) : ?>
        <ul>
            <li>
                <img src="img/<?= $m2['gambar']; ?>">
            </li>
            <li>Nama: <?= $m2['nama']; ?></li>
            <li>NIM: <?= $m2['nrp']; ?></li>
            <li>Email: <?= $m2['email']; ?></li>
            <li>Jurusan: <?= $m2['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>