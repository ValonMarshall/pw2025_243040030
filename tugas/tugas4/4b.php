<?php

$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>4b.php</title>
</head>

<style>
    body {
        font-family: Arial;
        margin-left: -2.5%;

        li {
            margin-left: 5%;

        }
    }
    
</style>

<body>
    
    <ol>
        <?php
            echo "<h4>Macam-macam perangkat keras komputer</h4>";
            foreach ($hardware as $urutan) {
                echo "<li>$urutan</li>";
            }
        ?>
    </ol>
    
    <?php
        $hardware[] = "Card Reader";
        $hardware[] = "Modem";
        sort($hardware);
    ?>

    <ol>
        <?php
            echo "<h4>Macam-macam perangkat keras komputer baru</h4>";
            foreach ($hardware as $urutan) {
                echo "<li>$urutan</li>";
            }
        ?>
    </ol>

</body>
</html>