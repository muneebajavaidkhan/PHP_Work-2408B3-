<?php
  //Single Dimensional Array

  echo "<h3>Index Array</h3>";
  $colors = array("Pink","Blue","Green","Red");
  echo $colors[2];

  echo "<pre>";
  print_r($colors);
  echo "</pre>";

  echo "<ul>";
        for($i=0;$i<count($colors);$i++){
            echo "<li>Array[$i] => $colors[$i]</li>";
        }
  echo "</ul>";

  echo "<h3>Associative Array</h3>";
  $data = ['StudName'=>'Ahmed','studMarks'=>90,'Subj'=>'IT'];

  foreach( $data as $key => $val){
    echo "Array[$key] => $val<br>";
  }

  echo "<h3>Multi Dimensional Array</h3>";

  $studInfo = [
    ["Ahmed","English",50], //00 //01//02
    ["Abc","Math",60], //10//11/12
    ["Sana","Computer",70] //2
  ];

  echo $studInfo[2][2];

  echo "<table border = 1>";
  echo "<th>Name</th>";
  echo "<th>Subject</th>";
  echo "<th>Marks</th>";

  for($i=0;$i<count($studInfo);$i++){ //1//0<=2

    echo "<tr>";
    echo "<th colspan = 6>studentInfo[$i]</th>";
    echo "</tr>";
    echo "<tr>";
    for($j= 0;$j<count($studInfo[$i]);$j++){ //0 //3<=2
        echo "<td>".$studInfo[$i][$j]."</td>"; //00 //01//02
    }
    echo "</tr>";
  }
  echo "</table>";
  echo "<h3>Multi Dimensional Associative Array</h3>";
  $studMarks = [
    'Stud1'=>['Name'=>'Ali','Subj'=>'Comp','Marks'=>90],
    'Stud2'=>['Name'=>'Ahmed','Subj'=>'IT','Marks'=>80],
    'Stud3'=>['Name'=>'Sana','Subj'=>'English','Marks'=>70]
  ];
  echo "<table border = 1>";
    foreach($studMarks as $k => $v){
        echo "<tr>";
        echo "<th colspan = 2>$k</th>";
        echo "</tr>";
        foreach($v as $key =>$val){
            echo "<tr>";
            echo "<th>$key</th>";
            echo "<td>$val</td>";
            echo "</tr>";
        }       
    }
  echo "</table>";
?>