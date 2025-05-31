<?php include 'header.php'?>
<?php include 'connection.php' ?>



<?php

    $fetchdata = "select * from students";
    $rowdata = mysqli_query($conn,$fetchdata);


    $countData = mysqli_num_rows($rowdata);

    if($countData > 0){


?>


<table class="container table table-bordered mt-5">
    <tr>
        <th>StudentId</th>
        <th>Name</th>
        <th>Gender</th>
        <th>City</th>
        <th>Courses</th>
        <th>Education</th>
        <th>Fees</th>
        <th colspan = 2></th>
    </tr>


    <?php
    
        while($data = mysqli_fetch_assoc($rowdata)){
            echo "<tr>";?>

                <td><?php echo $data['StudId'] ?></td>

                <td><?php echo $data['studName'] ?></td>
                <td><?php echo $data['Gender'] ?></td>
                <td><?php echo $data['City'] ?></td>
                <td><?php echo $data['Courses'] ?></td>
                <td><?php echo $data['Education'] ?></td>
                <td><?php echo $data['Fees'] ?></td>
                <td><a href=""  class = "btn btn-primary">Edit</a></td>
                <td><a href=""  class = "btn btn-danger">Delete</a></td>
<?php

            echo "</tr>";
        }
    
    ?>

</table>



<?php

    }
    else{
        echo "No record found";
    }


?>



