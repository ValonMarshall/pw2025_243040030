<?php

// NESTED LOOP / PENGULANGAN bersarang
for ($i = 1; $i <= 5; $i = $i + 1) {
    for ($j = 1; $j <= 4; $j = $j + 1) {
        echo "$j ";
    }
    echo "<br>";
}

echo "<hr>";
// Increment / 
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j = $j + 1) {
        echo "$j ";
    }
    echo "<br>";
}

echo "<hr>";
// Decrement
for ($i = 8; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j = $j + 1) {
        echo "$i ";
    }
    echo "<br>";
}
