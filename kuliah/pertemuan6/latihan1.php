<?php

// Membuat Array

// cara lama
$hari = array('Senin', 'Selasa', 'Rabu');
// cara baru
$bulan = ['Januari', 'Februari', 'Maret'];

$myArray = ['Sandhika', 39, true];

// Mencetak / Menampilkan Array
// Menampilkan seluruh isi (hanya untuk debugging)
var_dump($hari);
echo "<br>";
print_r($bulan);

// Gunakan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari[2];
echo $myArray [0];
echo "<hr>";

// Menambah isi array
// Gunakan []
$hari[] = 'Kamis';
$bulan[] = 'April';

















?>