<?php
include_once("newcon.php");
// $to="<h5>".$_POST['to']."</h5>";
$sub="<h5>".$_POST['sub']."</h5>";
$mes="<h6>".$_POST['message']."</h6>";
$name=$_POST['sname'];
$query="insert into `approval`(`message`,`name`,`sub`) values('$mes','$name','$sub');";
$data=$con->query($query);
if($data){
    echo "successfully sent Your messages";

}
else{
    "something went wrong";
}



?>