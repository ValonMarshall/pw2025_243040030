<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6a.php</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            
        }

        .row {
            display: flex;
        }

        .col {
            display: flex;
            font-family: 'Times New Roman';
            height: 30px;
            width: 30px;
            align-items: center;
            justify-content: center;
            margin: 2px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
            for ($i = $_GET['angka']; $i >= 1; $i--) {
                echo '<div class="row">';
                for ($j = 1; $j <= $i; $j++) {
                    $class = ($i % 2 == 0) ? "background-color: rgb(19, 64, 225);" : "background-color: rgb(19, 225, 201);";
                    echo "<div class='col' style='$class'>$i</div>";
                }
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>