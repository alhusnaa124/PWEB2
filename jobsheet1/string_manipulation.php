<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi</title>
</head>
<body>
    <?php
        $date = "09-10-2023";
        $x = " Selamat Belajar PHP !";
        echo $x. "<br/>";
        //membuat text menjadi kapital
        echo strtoupper ($x) . "<br/>";
        //membuat text menjadi kecil
        echo strtolower ($x) . "<br/>";
        //memotong string 
        //(string, start, length)
        echo substr ($date, 0, 2);
        
    ?>
</body>
</html>