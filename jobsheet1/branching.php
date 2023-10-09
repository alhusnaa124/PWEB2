<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <?php
        $x = 4;
        echo " Nilai x = $x </br>";
        if ($x > 0) {
            echo "$x adalah Bilangan Positif ";
        } 
        elseif ($x < 0) {
            echo "$x adalah Bilangan negatif";
        }
        else {
            echo "$x bilangan Nol";
        }
    ?>
</body>
</html>