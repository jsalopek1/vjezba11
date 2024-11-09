<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosti brojevi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Provjera je li broj prost</h2>
    <form method="post">
        <label for="broj">Unesite broj:</label><br>
        <input type="number" id="broj" name="broj" required><br><br>
        <button type="submit">Provjeri</button>
    </form>

    <?php
    function ProstBroj($broj) {
        if ($broj <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($broj); $i++) {
            if ($broj % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uneseniBroj = (int)$_POST['broj'];
        $rezultatProst = ProstBroj($uneseniBroj);
        
        if ($rezultatProst) {
            echo "<h4>Broj $uneseniBroj je prost.</h4>";
        } else {
            echo "<h4>Broj $uneseniBroj nije prost.</h4>";
        }
    }

    for ($broj = 2; $broj < 100; $broj++) {
        if (ProstBroj($broj)) {
            echo $broj . "; ";
        }
    }
    echo "</p></div>";
    ?>


<!-- vježba 11 - Prosti broj-->
</body>
</html>
