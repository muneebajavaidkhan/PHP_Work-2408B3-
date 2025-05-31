<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="FormHandling.php" method = "post">
        <input type="text" name = "email" placeholder = "Enter your Email">
        <input type="text" name = "pass" placeholder = "Enter your password">
        <input type="submit" value = "submit" name = "btn">

    </form>

    <?php
        if(isset($_POST['btn'])){
            $Email = $_POST['email'];
            $Password = $_POST['pass'];
        }
    
    ?>

    <p>Email: <?php echo @$Email?></p>
    <p>Pass: <?= @$Password?></p>



    <form action="ex.php" method = "get">
        <input type="text" name = "email" placeholder = "Enter your Email">
        <input type="text" name = "pass" placeholder = "Enter your password">
        <input type="submit" value = "submit" name = "btn">

    </form>
</body>
</html>