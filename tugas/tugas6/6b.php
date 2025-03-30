<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6b.php</title>
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
    <form method="POST">
        <label for="angka">Masukkan Angka :</label>
        <input type="number" name="angka" min="1" required>
        <button type="submit">Tampilkan</button>
    </form>

    <div class="container">
        <?php

        if (isset($_POST['angka'])) {
            $angka = $_POST['angka'];
        } else {
            $angka = 1;
        }

        echo "<br>";

        for ($i = $angka; $i >= 1; $i--) {
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