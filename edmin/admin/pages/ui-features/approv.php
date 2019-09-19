<?php 
session_start();
if(isset($_SESSION['user_id']))
{
$con=new mysqli("localhost","root","","attendance");
if(!$con){
    echo "not connected";
}
else{
    // echo "connected";
}
$id=$_POST['id'];
$approv=$_POST['approval'];
$query="UPDATE  `approval` set `approval`= '$approv'  where `id`='$id'";
$data=$con->query($query);
unset($id);

if($data){
    if($approv=="0"){
        $app="rejected";
    }
    else{
        $app="accepted";
    }
    $succ= "successfully ".$app;
    // unset($_SESSION['form']);
    header("location:typography.php?succ=".$succ);
}else {
    echo "something went wrong";
    // $con->errno;


}
}


?>