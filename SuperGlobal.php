<?php

    echo "<h3>Global Variables</h3>";

    $x = 75;
    $y = 25;

    function addition(){
        $GLOBALS['c'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

addition();
echo $c;


echo "<h3>SEERVER Variables</h3>";

echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];



?>