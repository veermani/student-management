<?php 

$con=new mysqli("localhost","root","","attendance");
if(!$con){
     "not connected";
}
else{
     "connected";
}
$con->set_charset("utf8");
if(isset($_POST['hidden'])){
         $id=$_POST['hidden'];


if(isset($_POST['name'])){
    if (trim($_POST['name'])!='') {
         $Name=$_POST['name'];
        $query="UPDATE `student_table` SET `student_name`='$Name' where `std_roll_no`='$id'";
        $con->query($query);
    }
}
if(isset($_POST['univ_roll'])){
    if (trim($_POST['univ_roll'])!='') {

     $uni_roll=$_POST['univ_roll'];
    $query="UPDATE `student_table` SET `univ_roll`='$uni_roll' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['admission'])){
    if (trim($_POST['admission'])!='') {

     $admission=$_POST['admission'];
    $query="UPDATE `student_table` SET `admission_no`='$admission' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['mobile'])){
    if (trim($_POST['mobile'])!='') {

      $mobile=$_POST['mobile'];
    $query="UPDATE `student_table` SET `phone`='$mobile' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['address'])){
    if (trim($_POST['address'])!='') {

      $address=$_POST['address'];
    $query="UPDATE `student_table` SET `address`='$address' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['email'])){
    if (trim($_POST['email'])!='') {

     $email=$_POST['email'];
    $query="UPDATE `student_table` SET `email`='$email' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['gender'])){
    if (trim($_POST['gender'])!='') {

      $gender=$_POST['gender'];
    $query="UPDATE `student_table` SET `gender`='$gender' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['DOB'])){
    if (trim($_POST['DOB'])!='') {

     $DOB=$_POST['DOB'];
    $query="UPDATE `student_table` SET `dob`='$DOB' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['semester'])){
    if (trim($_POST['semester'])!='') {

       $semester=$_POST['semester'];
    $query="UPDATE `student_table` SET `Semester`='$semester' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['project'])){
    if (trim($_POST['project'])!='') {

     $project=$_POST['project'];
    $query="UPDATE `student_table` SET `project`='$project' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['blood'])){
    if (trim($_POST['blood'])!='') {

     $blood=$_POST['blood'];
    $query="UPDATE `student_table` SET `Blood_group`='$blood' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['father'])){
    if (trim($_POST['father'])!='') {

     $father=$_POST['father'];
    $query="UPDATE `student_table` SET `fathers_name`='$father' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['fathero'])){
    if (trim($_POST['fathero'])!='') {

     $fathero=$_POST['fathero'];
    $query="UPDATE `student_table` SET `fathers_occupation`='$fathero' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['fatherm'])){
    if (trim($_POST['fatherm'])!='') {
         $fatherm=$_POST['fatherm'];
        $query="UPDATE `student_table` SET `fathers_mobile`='$fatherm' where `std_roll_no`='$id'";
        $con->query($query);
    }
}
if(isset($_POST['fathere'])){
    if (trim($_POST['fathere'])!='') {

     $fathere=$_POST['fathere'];
    $query="UPDATE `student_table` SET `fathers_email`='$fathere' where `std_roll_no`='$id'";
    $con->query($query);
    
}
}
if(isset($_POST['annual'])){
    if (trim($_POST['annual'])!='') {
         $annual=$_POST['annual'];
    $query="UPDATE `student_table` SET `Annual_income`='$annual' where `std_roll_no`='$id'";
    $con->query($query);
}
}
    
if(isset($_POST['mother'])){
    if (trim($_POST['mother'])!='') {
          $mother=$_POST['mother'];
    $query="UPDATE `student_table` SET `mothers_name`='$mother' where `std_roll_no`='$id'";
    $con->query($query);
}
}
if(isset($_FILES['img']['name'])){
    $img=$_FILES['img']['name'];
$query="UPDATE `student_table` SET `image`='$img' where `std_roll_no`='$id';";
$data=$con->query($query);

if(!$data){
    echo "sorry not inserted";
}
else{
    move_uploaded_file($_FILES['img']['tmp_name'],"../../../upload/".$img);
    echo "successfully inserted";
    
    }

}
    
if(isset($_POST['motherm'])){
    if (trim($_POST['motherm'])!='') {
         $motherm=$_POST['motherm'];
    // $query="UPDATE `student_table` SET  `student_name`='$Name',`fathers_name`='$father',`univ_roll`='$uni_roll',`admission_no`='$admission',`phone`='$mobile',`email`='$email',`address`='$address',`gender`='$gender',`dob`='$DOB',`Semester`='$semester',`Blood_group`='$blood',`project`='$project',`mothers_mobile`='$motherm',`mothers_name`='$mother',`Annual_income`='$annual',`fathers_mobile`='$fatherm',`fathers_email`='$fathere',`fathers_occupation`='$fathero'  where `std_roll_no`='$id';";
    $query="UPDATE `student_table` SET  `mothers_mobile`='$motherm'  where `std_roll_no`='$id';";
    $data=$con->query($query);
}
if($data){
    echo "successfu;y";
}
else{
    echo "sorry man";
}
// }

}
}
    
    

// $query="UPDATE `attendance` set `nam`";
// echo "updated your data";
// header("location:updatestu.php?status=".$i);


?>