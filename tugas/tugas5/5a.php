<?php 

$mahasiswa = [
    ['nama' => 'Dion Marshall Avalon Adhiseputro',
    'nrp' => '243040030',
    'email' => 'dionavalon32238@gmail.com',
    'jurusan' => 'Teknik Informatika',
    'gambar' => 'Adnachiel.png'
    ],

    ['nama' => 'Ansel Trivia',
    'nrp' => '223010049',
    'email' => 'Ansell928@gmail.com',
    'jurusan' => 'Teknik Industri',
    'gambar' => 'Ansel.png'
    ],

    ['nama' => 'Ascalon Heru',
    'nrp' => '213020012',
    'email' => 'Asc288@gmail.com',
    'jurusan' => 'Teknik Pangan',
    'gambar' => 'Ascalon.png'
    ],

    ['nama' => 'Beagle Moon',
    'nrp' => '201010085',
    'email' => 'BMoon12276@gmail.com',
    'jurusan' => 'Teknik Industri',
    'gambar' => 'Beagle.png'
    ],

    ['nama' => 'Rose Blaze',
    'nrp' => '233030023',
    'email' => 'Rosey538@gmail.com',
    'jurusan' => 'Teknik Mesin',
    'gambar' => 'Blaze.png'
    ],

    ['nama' => 'Durin',
    'nrp' => '213010067',
    'email' => 'Durin12345@gmail.com',
    'jurusan' => 'Teknik Industri',
    'gambar' => 'Durin.png'
    ],

    ['nama' => 'Fang Yun',
    'nrp' => '243060034',
    'email' => 'darkfang1923@gmail.com',
    'jurusan' => 'Perancangan Wilayah dan Kota',
    'gambar' => 'Fang.png'
    ],

    ['nama' => 'Hibiscus Volkova',
    'nrp' => '203060011',
    'email' => 'HK7980@gmail.com',
    'jurusan' => 'Perancangan Wilayah dan Kota',
    'gambar' => 'Hibiscus.png'
    ],

    ['nama' => 'Kroos Edna',
    'nrp' => '233050009',
    'email' => 'KRthebest1038@gmail.com',
    'jurusan' => 'Teknik Lingkungan',
    'gambar' => 'Kroos.png'
    ],

    ['nama' => 'Lava Volkova',
    'nrp' => '203040043',
    'email' => 'Lavavolkova321@gmail.com',
    'jurusan' => 'Teknik Informatika',
    'gambar' => 'Lava.png'
    ]
    
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a.php</title>
</head>

<body>
   
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs['gambar']; ?>">
            </li>
            <li>Nama: <?= $mhs['nama']; ?></li>
            <li>NIM: <?= $mhs['nrp']; ?></li>
            <li>Email: <?= $mhs['email']; ?></li>
            <li>Jurusan: <?= $mhs['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>