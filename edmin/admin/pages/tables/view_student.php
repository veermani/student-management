<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student_details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    


<?php 
$con=new mysqli("localhost","root","","attendance");
if(!$con){
    echo "not connected";
}
else{
    // echo "connected";
}
if(isset($_POST['page'])){
    $pageno=$_POST['page'];
}
else{
    $pageno=1;
}
$no_of_records=10;
$offset=($pageno-1)*10;

// $pass=$_POST['pass'];
$Query="select * from `student_table`";
$Data=$con->query($Query);
$no_of_pages=ceil($Data->num_rows/$no_of_records);
$Query="select * from `student_table`  order by `std_roll_no` asc LIMIT $offset,$no_of_records ;";
$data=$con->query($Query);
if($data){
        echo "<h5>Student List</h5>";
        while ($row=$data->fetch_array()) {
            echo "<div class='col-md-9 text-capitalize'> ";
            echo "<table class='table table-hover'><tbody><tr><td >
            <form action='view_student_details.php' method='POST'>
    <input type='hidden' name='id' value='".$row['std_roll_no']."' >
    <button type='submit' class='btn ji'><p1 class=' text-primary text-capitalize'> ".$row['student_name']."</p1></button>
</form>
           </td>";


           echo "<td class='text-right'><form action='updatestu.php' method='POST'>  
           <input type='hidden' name='idf' value='".$row['std_roll_no']."'>
           <button class='btn btn-outline-success' name='submit' value='submit' type='submit'>Update Details</button></form></td></tr></tbody></table> ";
           echo "</div>";
        }
        for($i=1;$i<=$no_of_pages;$i++){
            echo "<span class='view_student p-2 text-primary' id='".$i."' style='cursor:pointer;'>".$i."</span>";
            // echo "<a href='view_student.php?pageno=".$i."'>".$i."</a> &nbsp;";
        }
    
    
}
// <a href='view_student_details.php?id=".$row['std_roll_no']."'><p1 class='display-5'>".$row['student_name']."</p1></a>
// echo "<td class='text-right'><a href='update'><button class='btn btn-sm btn-outline-success'>Update Details</button></a></td></tr></tbody></table>";



?>
</body>
</html>