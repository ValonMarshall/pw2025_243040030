<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d.php</title>
    
    <style>
        .container {
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
        }

        .kotak {
            width: 60px;
            height: 60px;
            background-color: salmon;
            border: 1px solid black;
            text-align: center;
            align-content: center;
        }

        .hitam {
            background-color: #343434;
            color: white;
        }

        .putih {
            background-color: white;
            color: #343434;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo '<div class="row">';
            for ($j = 0; $j < 5; $j++) {
                $class = ($i + $j) % 2 == 0 ? 'hitam' : 'putih';
                echo "<div class='kotak $class'></div>";
            }
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>
