<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
        echo " perulangan for Bilangan Genap dari 1 - 10 " ;
        echo "<br/>";
        //looping dengan for
        for ($x = 2; $x <= 10; $x+=2 ){
            //br agar tulisan ke bawah
            echo  $x . "<br/>"; 
        }

        echo "<br/>";
        echo " perulangan where Bilangan Ganjil dari 1 - 10 " ;
        echo "<br/>";
        //looping dengan while
        $y = 1;
        while ($y <= 10){
            echo $y. " ";
            $y +=2;
        }

        echo "<br/>";
        // for ($z=1; $z<=20;$z++){
        //     $a = 0;
        //     for ($j=1; $j<=$z; $j++){
        //     if ($z % $j == 0){
        //         $a++;
        //     }
        // }
        // if ($a == 2 ){
        //     echo $z . " ";
        // }
        // }
        echo "<br>";
        echo "perulangan do while Bilangan prima kurang dari 20". "<br/>";
        $i = 1;
        do{
            $a=0;
            $j=1;
            do{
               if ($i % $j == 0){
                $a++;
               } 
               $j++;
            }while ($j<=$i);
            
            if ($a==2){
                echo $i . " ";
            }
            $i++;
        }while ($i<=20);
          
    ?>
</body>
</html>