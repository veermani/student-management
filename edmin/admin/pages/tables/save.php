<?php
$con=new mysqli("localhost","root","","attendance");
if(!$con){
    echo "not connected";
}
else{
    echo " connected";
}
$con->set_charset("utf8");

if(isset($_POST['name'])){
    $i=0;
    $first=$_POST['name'];
    $second=$_POST['admission_no'];
    $last=$_POST['univ_roll'];
    foreach ($first as $k ) {
        $query="INSERT into `student_table`(`student_name`,`admission_no`,`univ_roll`) values('$k','$second[$i]','$last[$i]');";
        echo $k." ".$second[$i]." ".$last[$i]."<br>";
        $con->query($query);
        $i++;
    }
    
}
else{
    echo "erroroe";
}



?>