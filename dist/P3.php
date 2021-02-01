<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/P3.css">
    <title>Factorial</title>
</head>

<body>
    <header id="main-header">
        <div class="headings">
            <h1 class="bg-header"><span class="bg-header-text">Ki</span>Bonnaci</h1>
            <h3 class="sm-header">A simple fibonnaci sequence generator</h3>
        </div>
    </header>
    <main id="main-content">
        <div class="container">
            <div class="inputs">
                <form action="P3.php" method="post">
                    <span class="label-limit">Enter <span class="limit-text">K-th</span> term: </span>
                    <input type="number" name="limit-val" class='limit-id' required autocomplete="off" />
                    <input type="submit" value="Enter" class='limit-btn'>
                </form>
            </div>
            <?php
            $limit = $_POST["limit-val"];

            echo "<div class='fib-container'>";
            $fnum = 1;
            $snum = 1;

            echo "<span class='num fnum'>" . $fnum . "</span><span class='num'>" . $snum . "</span>";

            for ($i = 0; $i < $limit - 2; ++$i) {
                $sum = $fnum + $snum;
                if ($i === $limit - 3) {
                    echo "<span class='num lnum'>$sum " . '<i class="fas fa-arrow-left"></i> Kth<span class="term">-term</span>' . "</span>";
                } else {
                    echo "<span class='num'>$sum</span>";
                }
                $fnum = $snum;
                $snum = $sum;
            }

            echo "</div>";

            ?>
        </div>
    </main>
</body>

</html>