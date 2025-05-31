<?php include 'connection.php' ?>


<?php


if(isset($_POST['ins'])){

    $studName = $_POST['StudName'];
    $Gender = $_POST['Gender'];
    $city = $_POST['city'];
    $course = $_POST['Course'];
    $Educ = $_POST['Education'];
    $Fees = $_POST['Fees'];


    $cor = implode(",",$course);//convert array into string //MVC,PHP


    $query = "insert into students(studName,Gender,City,Courses,Education,Fees) values ('$studName',' $Gender','$city','$cor','$Educ','$Fees')";

    $queryExec = mysqli_query($conn,$query);

    if($queryExec){
        echo "<script>alert('Data Inserted');window.location.href = 'Viewdata.php'</script>";
    }
    else{
        echo "<script>alert('Data not Inserted')</script>";

    }

}
   


?>