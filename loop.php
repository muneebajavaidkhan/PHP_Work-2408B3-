<?php
    echo "<h3>While Loop</h3>";

    $num = 1;
    while($num <= 10){
        echo $num. "<br>";
        $num++;
    }

    echo "<h3>Print table using while loop</h3>";
    $i = 2;
    $j = 1;
    while($i<=20){ // 2 * 1 = 2 //4 < = 20
        echo "2 * {$j} = {$i} <br>"; //2 * 1 = 2 //2 * 2 = 4
        $i+=2; // $i = $i + 2 //4 = 2+2// 6 = 4+2
        $j++; //1+1 = 2
    }

    
    echo "<h3>Print table using Do while loop</h3>";
    $k = 1;
    do{
        $num  = 2 * $k; // 2 * 1 = 2
        echo "2 * {$k} = {$num} <br>";
        $k++; //1+1 = 2
    }while($k <= 10); //2 > 10

?>