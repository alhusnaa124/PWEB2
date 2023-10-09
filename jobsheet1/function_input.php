<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <form method="post">
        Jari jari: <input type="number" name="jari">
        <input type="submit" value="hasil">
    </form>
    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // Ambil nilai jari-jari lingkaran dari input HTML
            $jari_jari = $_POST["jari"];
        
            // Fungsi menghitung luas persegi panjang
            
            // Fungsi menghitung luas lingkaran
            function lingkaran($r)
            {
                return 3.14 * $r * $r;
            }
        
            // Hitung luas dan cetak hasilnya
            $luas_lingkaran = lingkaran($jari_jari);
        
            echo "Luas Lingkaran = " . $luas_lingkaran;
        }
        
        
    ?>
</body>
</html>