<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
        function persegi_panjang ($p, $l){
            return $p * $l;
        }

        

        function lingkaran ($r){
            return 3.14 * $r *$r;
        }
        echo "Luas Persegi Panjang = " . persegi_panjang (2, 10) . "<br/>";
        echo "Luas Lingkaran = " . lingkaran (14);
    ?>
</body>
</html>