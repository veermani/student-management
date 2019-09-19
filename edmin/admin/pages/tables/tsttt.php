<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content=">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body{
            /* background-image:linear-gradient(to left bottom,rgba(255,0,0,0.5)50%,rgba(34,34,34,0.7)80%,rgba(23,90,200,0.3)36%),url("sviet.jpg"); */
            background-image:linear-gradient(to left bottom,rgba(10,10,10,0.5) 50%,rgba(255,255,255,0.07) 70%),url('sviet.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* height: 100vh;
            position: relative; */
        }
    </style>
</head>
<body>
<?php
    $con=new mysqli("localhost","root","","attendance");
    $con->set_charset("utf8");
    if(!$con){
        echo "not connected";
    }
    else{
        echo "connected";
    }
if (isset($_POST['id'])){
    $id=$_POST['id'];
$Query="select * from `student_table` where  `std_roll_no`='$id';";
$data=$con->query($Query);
$row=$data->fetch_array();


echo "<div class='row'>
<div class='col-md-12 '> 
<div class='row'>
<div class='col-md-3   text-light'><div class='row'><div class='col-md-12'><img src='../../../upload/".$row['image']."' width='250' alt='sorry! no image Found' class='media-object'></div>
<div class='col-md-1 mt-4'><a href='basic-table.php' class='btn btn-outline-success'>back</a></div>

</div></div>";

if ($row) {
    ?>
        <div class='col-md-8 b p-5 mx-auto text-capitalize  '><table class='table table-striped table-hover '>
        <tbody>
          <tr>
            <th>Name</th><td id='iia'  class='ll' spellcheck='false' > <?php echo  $row['student_name']; ?></h6></td></tr>
            <tr>
            <th>Univ. Roll No</th><td id='iib'  class='ll' spellcheck='false' > <?php echo  $row['univ_roll']; ?></h6></td></tr>
            <tr>
            <th>Admission No</th><td id='iic'  class='ll' spellcheck='false' > <?php echo  $row['admission_no']; ?></h6></td></tr>
            <tr>
            <th>Mobile NO</th><td id='iid'  class='ll' spellcheck='false' > <?php echo  $row['phone']; ?></h6></td></tr>
            <tr>
            <th>Address</th><td id='iie'  class='ll' spellcheck='false' > <?php echo  $row['address']; ?></h6></td></tr>
            <tr>
            <th>Email</th><td id='iif'  class='ll' spellcheck='false' > <?php echo  $row['email']; ?></h6></td></tr>
            <tr>
            <th>Gender</th><td id='iig'  class='ll' spellcheck='false' > <?php echo  $row['gender']; ?></h6></td></tr>
            <tr>
            <th>DOB</th><td id='iih'  class='ll' spellcheck='false' > <?php echo  $row['dob']; ?></h6></td></tr>
            <tr>
            <th>Semester</th><td id='iii'  class='ll' spellcheck='false' > <?php echo  $row['Semester']; ?></h6></td></tr>
            <tr>
            <th>Project Works</th><td id='iij'  class='ll' spellcheck='false' > <?php echo  $row['project']; ?></h6></td></tr>
            <tr>
            <th>Blood Group</th><td id='iik'  class='ll' spellcheck='false' > <?php echo  $row['Blood_group']; ?></h6></td></tr>
            <tr>
            <th>Father's Name</th><td id='iil'  class='ll' spellcheck='false' > <?php echo  $row['fathers_name']; ?></h6></td></tr>
            <th>Father's Mobile</th><td id='iim'  class='ll' spellcheck='false' > <?php echo  $row['fathers_mobile']; ?></h6></td></tr>
            <tr>
            <th>Father's Occupation</th><td id='iin'  class='ll' spellcheck='false' > <?php echo  $row['fathers_occupation']; ?></h6></td></tr>
            <tr>
            <th>Father's Email</th><td id='iio'  class='ll' spellcheck='false' > <?php echo  $row['fathers_email']; ?></h6></td></tr>
            <tr>
            <th>Annual Income</th><td id='iip'  class='ll' spellcheck='false' > <?php echo  $row['Annual_income']; ?></h6></td></tr>
            <tr>
            <th>Mother's Name</th><td id='iiq'  class='ll' spellcheck='false' > <?php echo  $row['mothers_name']; ?></h6></td></tr>
            <tr>
            <th>Mother's Mobile</th><td id='iir'  class='ll' spellcheck='false' > <?php echo  $row['mothers_mobile']; ?></h6></td></tr>
            
        </tbody> 
        
         </table> 
         <?php
}
echo "</div></div></div>"; 

}

?>


</body>
</html>