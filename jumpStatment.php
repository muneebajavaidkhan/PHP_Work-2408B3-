<?php

    echo "<h3>BREAK STATMENT</h3>";
    for($i = 0;$i<=10;$i++){
        if($i == 3){ //3==3
            break;
        }
        echo ("i = $i <br>"); //0,1,2
    }

    echo "Break Statment finished";

    echo "<h3>Continue STATMENT</h3>";
    for($i = 0;$i<=10;$i++){
        if($i == 3){ //4 == 3
            continue;
        }
        echo ("i = $i <br>"); //0,1,2,4,....
    }

    echo "<h3>Exit STATMENT</h3>";
    for($i = 0;$i<=10;$i++){
        if($i == 3){ //3 == 3
            exit;
        }
        echo ("i = $i <br>"); //0,1,2
    }

    echo "Terminate Complete Program";
    echo "Xyz";

?>