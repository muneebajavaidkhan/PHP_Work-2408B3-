<?php
    if(isset($_GET['btn'])){
        $Email =   htmlspecialchars($_GET['email']);
        $Password = htmlspecialchars($_GET['pass']);

        if($Email == "" || $Password == ""){
            echo "<script>alert('Please fill all fields')</script>";
        }
        else{
            if($Email == "Admin@gmail.com" && $Password == "admin123"){
                echo "<script>alert('Login Successfully')</script>";
                echo "<p>Admin: $Email</p> <br>";
                echo "<p>Admin Pass: $Password</p> <br>";
            }
            else{
                echo "<script>alert('Login Failed')</script>";

            }
        }
    }


?>