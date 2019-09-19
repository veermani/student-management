<?php 

$con=new mysqli("localhost","root","","attendance");
$con->set_charset("utf8");
if(!$con){
     "not connected";
}
{
     "connected";
}
if(isset($_POST['id'])){
         echo $id=$_POST['id'];


        echo $Name=$_POST['name'];

     echo $uni_roll=$_POST['univ_roll'];

     echo $admission=$_POST['admission'];

      echo $mobile=$_POST['mobile'];

      echo $address=$_POST['address'];

     echo $email=$_POST['email'];

      echo $gender=$_POST['gender'];

     echo $DOB=$_POST['DOB'];

       echo $semester=$_POST['semester'];

echo $project=$_POST['project'];

     echo $blood=$_POST['blood'];

     echo $father=$_POST['father'];

     echo $fatherm=$_POST['fatherm'];
    
         echo $fathero=$_POST['fathero'];

     echo $fathere=$_POST['fathere'];

      echo $annual=$_POST['annual'];

          echo $mother=$_POST['mother'];
         echo $motherm=$_POST['motherm'];
    // $query="UPDATE `student_table` set  `student_name`='$Name',`fathers_name`='$father',`univ_roll`='$uni_roll' where `std_roll_no`='$id';";
    // $data=$con->query($query);
    
    // $query="UPDATE `student_table` set `admission_no`='$admission',`phone`='$mobile',`email`='$email' where `std_roll_no`='$id';";
    // $data=$con->query($query);
    // $query="UPDATE `student_table` set `address`='$address',`gender`='$gender',`dob`='$DOB' where `std_roll_no`='$id';";
    // $data=$con->query($query);
    // $query="UPDATE `student_table` set `Semester`='$semester',`Blood_group`='$blood',`fathers_email`='$fathere' where `std_roll_no`='$id';";
    // $data=$con->query($query);
    // $querys="UPDATE `student_table` set `project`='$project',`mothers_mobile`='$motherm',`fathers_occupation`='$fathero' where `std_roll_no`='$id';";
    // $data=$con->query($querys);
    // $queryss="UPDATE `student_table` SET `mothers_name`='$mother',`Annual_income`='$annual',`fathers_mobile`='$fatherm' where `std_roll_no`='$id';";
    $query="UPDATE `student_table` SET `student_name`='$Name',`univ_roll`=$uni_roll,`admission_no`='$admission',`phone`='$mobile',`address`='$address',`email`='$email',`gender`='$gender',`dob`='$DOB',`Semester`='$semester',`Blood_group`='$blood',`fathers_name`='$father',`fathers_mobile`='$fatherm',`fathers_occupation`='$fathero',`mothers_name`='$mother',`mothers_mobile`='$motherm',`Annual_income`='$annual',`fathers_email`='$fathere',`project`='$project' WHERE `std_roll_no`='$id';";
// $query="UPDATE `student_table` SET `student_name`='adarsh thakur gadha',`univ_roll`=170280865,`admission_no`='2017btcs003',`phone`='930422065876',`address`='yuyuychakri',`email`='yutuytuyssardar3888@gmail.com',`gender`='female'  WHERE `std_roll_no`=1;";

    $data=$con->query($query);
    if($data){
    echo "successfuly";
}
else{
    echo "sorry man";
}

}
    
    



?>