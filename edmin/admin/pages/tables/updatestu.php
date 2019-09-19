<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Update Details</title>
    </head>
    <body>


<?php
// session_start();

if ($_POST['submit']=="submit") {
    // if(isset($_SESSION['user_id'])){
    $uid=$_POST['idf'];
    $con=new mysqli("localhost", "root", "", "attendance");
    if (!$con) {
        echo "not connected";
    }

    $query="SELECT * From `student_table`  where `std_roll_no`='$uid';";
    $data=$con->query($query);
    $row=$data->fetch_array();
    if ($row) {
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 bg-light shadow-lg mt-5">
                    <?php

                    echo "<div class='col-md-10 b p-5 mx-auto text-capitalize  '><h4 class='text-center text-secondary'>Student Details</h4><table class='table table-striped table-hover '>
                            <tbody class='p-4'>
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
                            
                             </table> <a href='basic-table.php' class='btn btn-outline-danger'>Back</a> </div>"; ?>
                    
                    
                    
                </div>
                <div class="col-md-4 mt-4 mx-auto" id="foro"><form method="POST" class="p-5" action="updatestu2.php">
                                <legend class="text-center">choose to edit</legend>
                        <select name="select[]" class="form-control" id="select" multiple size="9" required  >
                            <option  value="">--select--</option>
                            <option   value="name">Name</option>
                            <option   value="univroll">univ roll no</option>
                            <option   value="admission">Admssion No</option>
                            <option  value="address" >Address</option>
                            <option  value="mobile">Mobile No</option>
                            <option value="email">Email</option>
                            <option value="gender">Gender</option>
                            <option value="DOB">DOB</option>
                            <option value="semester">Semester</option>
                            <option value="project">Projects</option>
                            <option value="blood">Blood Group</option>
                            <option value="father">Father's Name</option>
                            <option value="fatherm">Father's Mobile</option>
                            <option value="fathero">Father's Occupation</option>
                            <option value="fathere">Father's Email</option>
                            <option value="annual">Annual income</option>
                            <option value="mother">Mother's Name</option>
                            <option value="motherm">Mother's Mobile</option>
                            
                            
                            
                        </select>
                        <input id="" class="form-control" type="hidden" name="kalia" value="<?php echo $uid;?>">
                        <input id=""  type="submit" class="btn btn-outline-success mt-4" value="submit" name="submit">
                        <!-- <span id='submit'>Skip this</span> -->
                        
                        
                    </form></div>
                
            </div>
        </div>
 
     
        
        
        
        
    </body>
    </html>
    
    <?php
    }
}
else{
    echo "sorry";
}


?>