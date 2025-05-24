<?php
echo "<h3>Simple Function</h3>";

function AddTwoNum(){
    $num1 = 80;
    $num2 = 90;
    $sum = $num1 +$num2;
    echo $sum."<br>";
}

AddTwoNum();

echo "<h3>Paramterized Function</h3>";

function AvgNum($n1,$n2,$n3){
    $Avg = $n1 + $n2 + $n3/3;
    echo "Average number is ".round($Avg);

}
AvgNum(100,99,89);

echo "<h3>Default Function</h3>";
function Defaultfunc($city = "Lahore"){
    echo $city;

}
Defaultfunc('Karachi');

echo "<h3>Function With Return</h3>";

function PrintTable($i){
    $table = "";
    for($j=1;$j<=10;$j++){ //$a+=1// $a = $a + 1
        $num = $i * $j;
        $table .= "$i * $j = $num <br>"; // 2 * 1 = 2 
    }
    return $table;
}
 echo PrintTable(10);

 echo "<h3>Static Variable</h3>";
 function testStatic(){ //Retains its value between function call
    static $count = 0;
    $count++;
    echo "Count is : $count <br>";

 }
 testStatic();
 testStatic();
 testStatic();

 
 echo "<h3>Pass By Value</h3>";
 function ChangeValue($num){
    $num = $num + 10; //10 + 10 = 20
    echo "Inside Function: $num<br>";
 }
 $number =  10;
 ChangeValue($number);
 echo $number;


 echo "<h3>Pass By Reference</h3>";
function changeRef(&$num){
    $num = $num + 10; //10 + 10 = 20
    echo "Inside Function: $num<br>";
}
$numbers = 10;
changeRef($numbers);
echo "Outside Function: $numbers<br>";


?>

