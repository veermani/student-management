<?php
// include('../newcon.php');


// $con=new mysqli('localhost','root','','swapankr');
$con=new mysqli("localhost","root","","swapankr");

if(!$con){
    // echo "not connected";
}
else{
    // echo "connected";
}
$user=$_POST['username'];
// $user="swapan";
$msg=$_POST['message'];
// $msg="koi nahin";
$query="insert into `messages` (`name`,`messages`) values ('$user','$msg')";
$data=mysqli_query($con,$query);
if($data){
    echo "Message  sent";
}
else{

echo mysqli_error($con);

}
?>