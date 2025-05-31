<?php    


// SingleLine Comment This is single line comment #This is also a single line comment 


/* Multiline Comment This is a multiple line comment here we print 
Hello World statement */
echo "<h3>Hello PHP</h3>";



// VARIABLES


$Num = 78;

$names = "Abc";
$Names = "ABC";

echo $Names."<br>";

var_dump($Names);

echo "<br>";

var_dump($Num);

echo "<h3>SWAP TWO NUMBERS</h3>";

$num1 = 20;
$num2 = 30;

echo "The number before swapping is <br>";
echo "num1 = $num1 and num2 = $num2 <br>";

$temp = $num1; //20
$num1 = $num2; //30
$num2 = $temp; //20

echo "The number after swapping is <br>";
echo "num1 = $num1 and num2 = $num2 <br>";

echo "<h3>Constant Variables</h3>";
define("Hello","What new in php");

echo Hello;
?>

