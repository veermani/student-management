<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <?php
    $con=new mysqli("localhost","root","","attendance");
    $uid=$_POST['uid'];
    if(!$con){
        echo "not connected";
    }
    $query="SELECT * From `student_table`  where `std_roll_no`='$uid';";
    $data=$con->query($query);
    $row=$data->fetch_array();
    
    if($row){

    echo "<h4 class='text-center text-secondary'>Student Details</h4><table class='table table-striped table-hover '>
                            <tbody class='p-4 '>
                              <tr>
                                <th><img src='../../../upload/".$row['image']."' width='70'></th><td><h6>".$row['student_name']."</h6></td></tr>
                                <tr>
                                <th>Univ. Roll No</th><td><h6>".$row['univ_roll']."</h6></td></tr>
                                <tr>
                                <th>Admission No</th><td><h6>".$row['admission_no']."</h6></td></tr>
                                <tr>
                                <th>Mobile NO</th><td><h6>".$row['phone']."</h6></td></tr>
                                <tr>
                                <th>Address</th><td><h6>".$row['address']."</h6></td></tr>
                                <tr>
                                <th>Email</th><td><h6>".$row['email']."</h6></td></tr>
                                <tr>
                                <th>Gender</th><td><h6>".$row['gender']."</h6></td></tr>
                                <tr>
                                <th>DOB</th><td><h6>".$row['dob']."</h6></td></tr>
                                <tr>
                                <th>Semester</th><td><h6>".$row['Semester']."</h6></td></tr>
                                <tr>
                                <th>Project Works</th><td><h6>".$row['project']."</h6></td></tr>
                                <tr>
                                <th>Blood Group</th><td><h6>".$row['Blood_group']."</h6></td></tr>
                                <tr>
                                <th>Father's Name</th><td><h6>".$row['fathers_name']."</h6></td></tr>
                                <th>Father's Mobile</th><td><h6>".$row['fathers_mobile']."</h6></td></tr>
                                <tr>
                                <th>Father's Occupation</th><td><h6>".$row['fathers_occupation']."</h6></td></tr>
                                <tr>
                                <th>Father's Email</th><td><h6>".$row['fathers_email']."</h6></td></tr>
                                <tr>
                                <th>Annual Income</th><td><h6>".$row['Annual_income']."</h6></td></tr>
                                <tr>
                                <th>Mother's Name</th><td><h6>".$row['mothers_name']."</h6></td></tr>
                                <tr>
                                <th>Mother's Mobile</th><td><h6>".$row['mothers_mobile']."</h6></td></tr>
                                
                            </tbody> 
                            
                             </table> ";
                
                    
                    
                    
    }
    
    
    
    ?>
</body>
</html>