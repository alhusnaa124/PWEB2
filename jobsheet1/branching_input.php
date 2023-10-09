<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="post" action="">
        Nilai x : <input name="nilai_x"><br>
        <input type="submit" value="cek">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"]== "POST")
        {
            $x = $_POST["nilai_x"];

        if ($x > 0) {
            echo "$x adalah Bilangan Positif ";
        } 
        elseif ($x < 0) {
            echo "$x adalah Bilangan negatif";
        }
        else {
            echo "$x bilangan Nol";
        }
        }
    ?>
</body>
</html>