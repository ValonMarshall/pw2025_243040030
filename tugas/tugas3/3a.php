<?php

    echo "<h4>Menghitung Luas lingkaran</h4>";

    function hitungLuasLingkaran ($r) {

        echo "Jari-jari lingkaran = " . 10 . " cm" . "<br>";
        echo "Luas lingkaran = " . 3.14 * $r * $r . " cm²" . "<hr>";
    }

    hitungLuasLingkaran (10);


    echo "<h4>Menghitung Keliling Lingkaran</h4>";

    function hitungKelilingLingkaran ($r) {

        echo "Jari-jari lingkaran = " . 20 . " cm" . "<br>";
        echo "Keliling lingkaran = " . 2 * 3.14 * $r . " cm" . "<hr>";
    }

    hitungKelilingLingkaran (20);
?>