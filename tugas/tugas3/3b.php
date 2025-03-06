<?php

    function urutanAngka ($angka) {
        
        $Awal = 1;

    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$Awal ";
            $Awal++;
        }
        echo "<br>";
    }
    }

    echo urutanAngka (5)


?>