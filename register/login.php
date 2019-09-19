<?php
session_start();
include('../edmin/newcon.php');
// $user=strtoupper($_POST['user']);
$user=$_POST['user'];
$pass=$_POST['pass'];
$user_type=$_POST['usertype'];
if($user_type=="user"){
// $image=$_POST['image']['name'];
// $query="select * from `student_table` where `admission_no`='$user' or `student_name`='$user' or `phone`='$user' or `email`='$user' or `univ_roll`='$user'";
$query="select * from `student_table` where  `admission_no`='$user' or `phone`='$user' or `email`='$user' ";
$data=$con->query($query);

$row=$data->fetch_assoc();
// if($row['admission_no']==$user){
    if($data->num_rows>0){      
        // echo $row['student_name'];
    if($row['univ_roll']==$pass||$row['pass']==$pass){
    // if($row['pass']==$pass){
        echo "welcome ".$row['student_name'];
        if(isset($_POST['check'])){
            setcookie('user',$user,time()+60*60);
            setcookie('pass',$pass,time()+60*60);
        }
        $_SESSION['user_id']=$row['std_roll_no'];
        // $_SESSION['user_name']=$row['admission_no'];
        $_SESSION['user_name']=$row['student_name'];
        header('location:../edmin/index.php');
    }
    else{
        echo "invalid username/password!!!";
        }
}
else{
    echo "invalid username/password";
}
}
else{
    // header("location:admin.php");


    
// $image=$_POST['image']['name'];
$query="select * from `admin_table` where `email`='$user' or `name`='$user' or `mobile`='$user'  ";
$data=$con->query($query);

$row=$data->fetch_array();
// if($row['admission_no']==$user){
    if($data->num_rows>0){      
    if($row['mobile']==$pass){
        echo "welcome ".$row['name'];
        if(isset($_POST['check'])){
            setcookie('user',$user,time()+60*60);
            setcookie('pass',$pass,time()+60*60);
        }
        $_SESSION['user_id']=$row['id'];
        $_SESSION['user_name']=$row['name'];
        header('location:../edmin/admin/index.php');
    }
    else{
        echo "invalid username/password!!!";
        }
}
else{
    echo "invalid username/password";
}

}

?>