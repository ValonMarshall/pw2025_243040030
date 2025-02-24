<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c.php</title>

    <style>
        .container {
            display: flex;
            flex-direction: column;
        }

        .kotak {
            width: 30px;
            height: 30px;
            background-color: salmon;
            border: 0.4px solid black;
            text-align: center;
            align-content: center;
        }

        .row {
            display: flex;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        for ($i = 10; $i >= 1; $i--) {
            echo '<div class="row">';
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='kotak'>$j</div>";
            }
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>