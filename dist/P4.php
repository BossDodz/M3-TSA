<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/P4.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <title>KFactorial</title>
</head>

<body>
    <header id="main-header">
        <div class="headings">
            <h1 class="bg-header"><span class="bg-header-text">K</span>Factorial</h1>
            <h3 class="sm-header">A simple factorial program</h3>
        </div>
    </header>
    <main id="main-content">
        <div class="container">
            <div class="inputs">
                <form action="P4.php" method="post">
                    <span class="label-limit">Enter <span class="limit-text">K-th</span> number: </span>
                    <input type="number" name="number-val" class='number' required autocomplete="off" />
                    <input type="submit" value="Enter" class='limit-btn'>
                </form>
            </div>
            <?php
            if (isset($_POST['number-val'])) {
                $number = $_POST["number-val"];
                function factorial($number)
                {
                    if ($number === 1) {
                        return 1;
                    } else {
                        return $number * factorial($number - 1);
                    }
                }

                echo "<div class='fact-container'>";
                echo "<span class='res text'>The K-th number (<span class='num'>$number</span>) factorial is <span class='num'>" . factorial($number) . "</span></span>";
            }
            ?>
        </div>
    </main>
</body>

</html>