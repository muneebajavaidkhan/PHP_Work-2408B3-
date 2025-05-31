<?php
    $stud = array("Peter","John","David");
    sort($stud);
    $clength = count($stud);

    for($i = 0;$i<$clength;$i++){
        echo $stud[$i]."<br>";
    }
//Associative Array

//asort -> convert assending order according to values
echo "<h3>convert assending order according to values</h3>";
    $age = array("Peter"=>35,"John"=>37,"David"=>43);
    asort($age);
    foreach($age as $x => $v){
        echo "Key = $x and value = $v <br>";
    }

//ksort -> convert assending order according to key
echo "<h3>convert assending order according to key</h3>";
    $ages = array("Peter"=>35,"John"=>37,"David"=>43);
    ksort($ages);
    foreach($ages as $x => $v){
        echo "Key = $x and value = $v <br>";
    }
//arsort -> convert dessending order according to values
echo "<h3>convert dessending order according to values</h3>";
$age = array("Peter"=>35,"John"=>37,"David"=>43);
    arsort($age);
    foreach($age as $x => $v){
        echo "Key = $x and value = $v <br>";
    }

//krsort -> convert dessending order according to keys
echo "<h3>convert dessending order according to keys</h3>";
$age = array("Peter"=>35,"John"=>37,"David"=>43);
    krsort($age);
    foreach($age as $x => $v){
        echo "Key = $x and value = $v <br>";
    }
?>