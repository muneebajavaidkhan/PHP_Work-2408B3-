<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    echo "<h3>IF ELSE PROGRAM</h3>";

    $side = 28.46;
    $perimeter = $side * 4.00;
    $area = $side * $side;

    if($side > 15 && $perimeter > 1000){ //28.46 > 15 && 113.84 > 1000 
        $sideValue = $side;
        $perimterValue = $perimeter;
        $areaValue =  $area;
    }
    else{
        $sideValue =0;
        $perimterValue =0;
        $areaValue = 0;
    }


?>

<table>
    <tr>
        <td>Side</td>
        <td> <input type="text" value = <?php echo $sideValue?>></td>
    </tr>
    <tr>
        <td>Perimeter</td>
        <td> <input type="text" value = <?= $perimterValue ?>></td>
    </tr>
    <tr>
        <td>Area</td>
        <td> <input type="text" value = <?= $areaValue ?>></td>
    </tr>
</table>


<?php
     echo "<h3>IF ELSE IF PROGRAM</h3>";

     $number = -7;
     if($number > 0){ //-8 > 0
        if($number % 2 == 0){
            echo "<p> Number $number is positive and even</p>";
        }
        else{
            echo "<p> Number $number is positive and odd</p>";
        }
     }
     else if( $number < 0){ //-8 <0
        if($number % 2 == 0){
            echo "<p> Number $number is negative and even</p>";
        }
        else{
            echo "<p> Number $number is negative and odd</p>";
        }
     }

?>

<?php
    echo "<h3>Switch PROGRAM</h3>";

    $role = "admin";
    $message = "";
    switch($role){
        case "admin":
            $message = "Welcome Admin";
        break;
        case "author":
           case "editor":
            $message = "Welcome do you want to create a new article";
        break;
        case "subscriber":
            $message = "Welcome checkout a new article";
        break;
        default:
            $message = "You are not authorized to access this page";
    }

?>


<form action="">

<label for="">Message</label>
<input type="text" value = "<?= $message ?>" id = "msg">
<input type="submit" value = "submit" onclick = "ClickEvent()">
</form>



<script>
    function ClickEvent(){
        let valueGet = document.getElementById('msg').value;
        alert(valueGet);
    }
</script>
</body>
</html>