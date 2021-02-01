<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/P2.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <title>Problem 2</title>
</head>

<body>
    <main id="main-content">
        <div class="table-container">
            <h1 class="bg-title">Multiplication Table</h1>
            <?php
            echo "<table>";
            for ($i = 0, $c = 0; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= 10; $j++) {
                    if ($c % 2 == 0) {
                        echo "<td class='s1'>" . $i * $j . "</td>";
                    } else {
                        echo "<td class='s2'>" . $i * $j . "</td>";
                    }
                    $c++;
                }
                echo "</tr>";
            }
            echo "<table>";

            ?>
        </div>
    </main>
</body>

</html>