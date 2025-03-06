<?php
// PENGULANGAN/LOOPING
// for, while, do.. while


// while
// 1. Nilai awal / initial value
// 2. Kondisi terminasi / saat looping berhenti
// 3. Increment / Decrement
$i = 10;
while ($i > 0) {
    echo "Hello World! $i x <br>";
    $i = $i - 1;
}

echo "<hr>";


// for
for ($i = 1; $i <= 10; $i = $i + 2) {
    echo "Hello World! $i <br>";
}
